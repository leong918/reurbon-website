import $ from "jquery";
import gsap from "gsap";
import Observer from "gsap/Observer";

// Register GSAP plugin globally
gsap.registerPlugin(Observer);

export function initFloatingHeader() {
    const $header = $("#tt-header");

    let lastScrollTop = 0;

    Observer.create({
        target: window,
        type: "scroll, wheel, touch",
        tolerance: 10,
        onChangeY: (self) => {
            // add class backdrop-header when scrolling down
            if (self.scrollY() > lastScrollTop) {
                $header.addClass("backdrop-header");
                $header.find(".tt-logo-light").hide();
                $header.find(".tt-logo-dark").show();
            }
            lastScrollTop = self.scrollY();

            // remove class backdrop-header when scroll at the top
            if (lastScrollTop < 100) {
                $header.removeClass("backdrop-header");
                $header.find(".tt-logo-light").show();
                $header.find(".tt-logo-dark").hide();
            }
        }
    });
}
