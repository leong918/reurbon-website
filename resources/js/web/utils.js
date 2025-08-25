import $ from "jquery";
import { nav_header } from "./template/header";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export function isMobile() {
    // ==============================================
    // Detect touch device (do not remove!!!)
    // Info: https://developer.mozilla.org/en-US/docs/Web/HTTP/Browser_detection_using_the_user_agent#mobile_device_detection
    // ==============================================

    var isMobile = false;
    if ("maxTouchPoints" in navigator) {
        isMobile = navigator.maxTouchPoints > 0;
    } else if ("msMaxTouchPoints" in navigator) {
        isMobile = navigator.msMaxTouchPoints > 0;
    } else {
        const mQ = matchMedia?.("(pointer:coarse)");
        if (mQ?.media === "(pointer:coarse)") {
            isMobile = !!mQ.matches;
        } else if ("orientation" in window) {
            isMobile = true; // deprecated, but good fallback
        } else {
            // Only as a last resort, fall back to user agent sniffing
            isMobile =
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Nokia|Opera Mini|Tablet|Mobile/i.test(
                    navigator.userAgent
                );
        }
    }

    // Add class "is-mobile" to </body>
    if (isMobile) {
        $("body").addClass("is-mobile");
    }

    return isMobile;
}

function calculatePosition(position, container_height, velocity) {
    if (position > container_height) {
        return container_height;
    }
    if (position < 0) {
        return 0;
    }
    return (position += velocity * 0.008);
}
// Make container follow user scroll
export function scrollFollow({
    scrollTriggerId,
    containerId,
    wrapperId,
    minWidth,
    maxWidth,
    duration = 1,
}) {
    ScrollTrigger.getById(scrollTriggerId)?.kill();

    const viewportWidth = $(window).width();
    let velocity = 0;
    let position = 0;
    let container_height =
        $(`#${containerId}`).outerHeight() -
        nav_header.outerHeight() -
        $(`#${wrapperId}`).outerHeight();

    // QuickTo setter (reuses 1 tween under the hood)
    const yTo = gsap.quickTo(`#${wrapperId}`, "y", {
        duration,
        ease: "power3.out",
    });

    if (viewportWidth >= minWidth && viewportWidth <= maxWidth) {
        ScrollTrigger.create({
            id: scrollTriggerId,
            trigger: `#${containerId}`,
            start: `top-=${nav_header.outerHeight()} top`,
            end: `bottom+=${nav_header.outerHeight()} bottom`,
            onUpdate: (self) => {
                velocity = self.getVelocity();
                position = calculatePosition(
                    position,
                    container_height,
                    velocity
                );
                let clampY = gsap.utils.clamp(0, container_height, position);

                // Instead of gsap.to every frame:
                yTo(clampY);
            },
            onToggle: () => {
                if (position < container_height / 2) {
                    position = 0;
                } else {
                    position = container_height;
                }
                yTo(position);
            },
        });
    } else {
        yTo(0);
    }
}

function growHeight(content, expanded, arrow, rotateDeg = "+=180") {
    if (!expanded) {
        gsap.to(content, {
            height: "auto", // animate to real height
            opacity: 1,
            duration: 0.5,
            ease: "power2.out",
        });
        gsap.to(arrow, {
            opacity: 1,
            duration: 0.3,
            ease: "power2.out",
        });
    } else {
        gsap.to(content, {
            height: 0,
            opacity: 0,
            duration: 0.4,
            ease: "power2.in",
        });
        gsap.to(arrow, {
            opacity: 0.6,
            duration: 0.3,
            ease: "power2.out",
        });
    }
    gsap.to(arrow, {
        rotate: rotateDeg ? rotateDeg : "+=180",
        duration: 0.3,
        ease: "power2.out",
    });
}

export function dropdownSelector() {
    const wrappers = $("[data-dropdown-wrapper]");
    if (wrappers) {
        wrappers.each(function () {
            const wrapper = $(this);
            const header = wrapper.find("[data-dropdown-header]");
            const child = wrapper.find("[data-dropdown-child]");
            const arrow = wrapper.find("[data-dropdown-toggle]");

            let expanded = false;
            header.addClass("cursor-pointer");
            gsap.set(child, { height: 0, opacity: 0, overflow: "hidden" });

            header.on("click", () => {
                let rotate = arrow.data("rotate");
                if (expanded && rotate) {
                    rotate = `-=${rotate}`;
                }
                if (!expanded && rotate) {
                    rotate = `+=${rotate}`;
                }
                if (!rotate) {
                    rotate = null;
                }
                growHeight(child, expanded, arrow, rotate);
                expanded = !expanded;
            });
        });
    }
}

export function mouseMoveParallax() {
    // Add event listener
    const container = $("#parallax-container");
    const card = $("#parallax-image");

    if (container && card) {
        let width = container.innerWidth();
        let height = container.innerHeight();

        container.on("mousemove", (e) => {
            const rect = container[0].getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            moved(x, y);
        });
        container.on("mouseleave", ended);
        container.on("touchmove", (e) => {
            moved(e.touches[0].clientX, e.touches[0].clientY);
        });
        container.on("touchend", ended);
        container.on("touchcancel", ended);
        container.on("resize", (e) => {
            width = container.innerWidth();
            height = container.innerHeight();
        });

        function moved(x, y) {
            let horizontal = ((x / width) * 100 - 50) * 0.8;
            let vertical = ((y / height) * 100 - 50) * 0.8;
            card.css(
                "transform",
                `rotateY(${horizontal}deg) rotateX(${-vertical}deg)`
            );
        }

        function ended() {
            card.css("transition", "500ms");
            card.css("transform", "rotateY(0deg) rotateX(0deg)");
            setTimeout(() => card.css("transition", "none"), 500);
        }
    }
}

export function animateScrollAnimation() {
    const container = $("#parallax-container");
    const leftImage = container.find(".left img");
    const rightImage = container.find(".right img");

    gsap.set(leftImage, { xPercent: -50, yPercent: 50 });
    gsap.set(rightImage, { xPercent: 50, yPercent: -50 });

    gsap.to([leftImage, rightImage], {
        xPercent: 0,
        duration: 5,
        ease: "circ",
        scrollTrigger: {
            id: "parallax-container",
            trigger: "#parallax-container",
            start: `0`,
            end: "center center",
            scrub: true,
        },
    });
}
