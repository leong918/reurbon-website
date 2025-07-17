import $ from "jquery";
import gsap from "gsap";
import Observer from "gsap/Observer";

gsap.registerPlugin(Observer);

export function initFloatingHeader() {
    const $header = $("#tt-header");
    let isFixed = false;

    Observer.create({
        target: window,
        type: "scroll,wheel,touch",
        onChangeY: (self) => {
            const scrollY = self.scrollY();

            if (scrollY > 50 && !isFixed) {
                isFixed = true;
                $header.removeClass("hidden");
                $header.addClass("backdrop-header");
                gsap.fromTo(
                    $header,
                    { y: -100, autoAlpha: 0 },
                    { y: 0, autoAlpha: 1, duration: 0.4, ease: "power2.out" }
                );
            }

            if (scrollY < 50 && isFixed) {
                isFixed = false;
                $header.removeClass("backdrop-header");
                gsap.to($header, {
                    y: 0,
                    autoAlpha: 1,
                    duration: 0.2,
                    onComplete: () => {
                        $header.addClass("hidden");
                    },
                });
            }
        },
    });
}
