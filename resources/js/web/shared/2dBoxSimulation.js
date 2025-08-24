import Matter from "matter-js";

export function initSimulation() {
    function createSpriteBody(
        containerHeight,
        containerWidth,
        Composite,
        Bodies,
        boxes
    ) {
        const colors = ["#FDFDFD", "#212121", "#FFB835", "#1831CA"]
        const tags = document.querySelectorAll(".tag");
        const tagBodies = Array.from(tags).map((tag) => {
            const width = tag.offsetWidth;
            const height = tag.offsetHeight;

            const x = Math.random() * (containerWidth - width) + width / 2;
            const y = Math.random() * containerHeight;
            const color = Math.floor(Math.random()*4)
            if(color == 1){
                tag.style.color = "#FDFDFD"
            }

            const body = Bodies.rectangle(x, y, width, height, {
                chamfer: { radius: height / 2 }, // Rounded corners
                density: 0.01,
                friction: 0.1,
                restitution: 0.4, // Bouncy effect
                render: {
                    fillStyle: colors[color], // Disable Matter.js background rendering
                },
            });

            Composite.add(boxes, body);
            return { body, element: tag };
        });
        return tagBodies;
    }

    function startSimulation() {
        var Engine = Matter.Engine,
            Render = Matter.Render,
            Runner = Matter.Runner,
            Events = Matter.Events,
            MouseConstraint = Matter.MouseConstraint,
            Mouse = Matter.Mouse,
            World = Matter.World,
            Composite = Matter.Composite,
            Bodies = Matter.Bodies;

        // create an engine
        var engine = Engine.create(),
            world = engine.world;

        // Get the container element and its dimensions
        var containerElement = document.querySelector(".boxSimulation");
        var containerWidth = containerElement.clientWidth;
        var containerHeight = containerElement.clientHeight;

        // create a renderer
        var render = Render.create({
            element: containerElement,
            engine: engine,
            options: {
                width: containerWidth,
                height: containerHeight,
                background: "#DE3A27",
                wireframes: false,
            },
        });

        // create bounds
        var ground = Bodies.rectangle(
            containerWidth / 2,
            containerHeight + 50,
            containerWidth + 160,
            160,
            { render: { opacity: 0 }, isStatic: true }
        );
        var wallLeft = Bodies.rectangle(
            -50,
            containerHeight / 2,
            160,
            containerHeight,
            { render: { opacity: 0 }, isStatic: true }
        );
        var wallRight = Bodies.rectangle(
            containerWidth + 50,
            containerHeight / 2,
            160,
            containerHeight,
            { render: { opacity: 0 }, isStatic: true }
        );
        var roof = Bodies.rectangle(
            containerWidth / 2,
            -50,
            containerWidth + 80,
            160,
            { render: { opacity: 0 }, isStatic: true }
        );

        var screen = Composite.create({ label: "screen" });
        Composite.add(screen, [wallLeft, wallRight, roof, ground]);

        var boxes = Composite.create({ label: "boxes" });

        const tagBodies = createSpriteBody(
            containerHeight,
            containerWidth,
            Composite,
            Bodies,
            boxes
        );
        World.add(world, [screen, boxes]);

        Events.on(engine, "afterUpdate", () => {
            tagBodies.forEach(({ body, element }) => {
                const { x, y } = body.position;

                element.style.transform = `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(${body.angle}rad)`;
            });
        });

        // add mouse control
        var mouse = Mouse.create(render.canvas),
            mouseConstraint = MouseConstraint.create(engine, {
                mouse: mouse,
                constraint: {
                    stiffness: 0.2,
                    render: {
                        visible: false,
                    },
                },
            });

        World.add(world, mouseConstraint);

        // keep the mouse in sync with rendering
        render.mouse = mouse;
        // Allow page scrolling in matter.js window
        mouseConstraint.mouse.element.removeEventListener(
            "mousewheel",
            mouseConstraint.mouse.mousewheel
        );
        mouseConstraint.mouse.element.removeEventListener(
            "DOMMouseScroll",
            mouseConstraint.mouse.mousewheel
        );
        mouseConstraint.mouse.element.removeEventListener(
            "wheel",
            mouseConstraint.mouse.mousewheel
        );

        // // Detect clicks vs. drags
        // let click = false;

        // document.addEventListener("mousedown", () => (click = true));
        // document.addEventListener("mousemove", () => (click = false));

        // // Create a On-Mouseup Event-Handler
        // Events.on(mouseConstraint, "mouseup", function (event) {
        //     var mouseConstraint = event.source;
        //     var bodies = engine.world.bodies;
        //     console.log(mouseConstraint)
        //     console.log(engine.world)
        //     if (!mouseConstraint.bodyB) {
        //         for (let i = 0; i < bodies.length; i++) {
        //             var body = bodies[i];
        //             // Check if clicked or dragged
        //             if (click === true) {
        //                 if (
        //                     Matter.Bounds.contains(
        //                         body.bounds,
        //                         mouseConstraint.mouse.position
        //                     )
        //                 ) {
        //                     var bodyUrl = body.url;
        //                     // Hyperlinking feature
        //                     if (bodyUrl != undefined) {
        //                         //window.location.href = bodyUrl;
        //                         window.open(bodyUrl, "_blank");
        //                     }
        //                     break;
        //                 }
        //             }
        //         }
        //     }
        // });

        // run the renderer
        Render.run(render);

        // create runner
        var runner = Runner.create();

        // run the renderer
        Runner.run(runner, engine);
    }

    // Get the container element
    var containerElement = document.querySelectorAll(".boxSimulation-wrapper");

    if (containerElement?.length) {
        // Create an intersection observer
        var observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Initialize the simulation when the element is visible
                    startSimulation();

                    observer.disconnect();
                }
            });
        }, {});

        // Observe the container element
        containerElement.forEach((item) => {
            observer.observe(item);
        });
    }
}
