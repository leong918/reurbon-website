import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import $ from "jquery";
import { isMobile } from "../utils";

gsap.registerPlugin(ScrollTrigger);

export function initGsapFade() {
    const $elements = $("[data-gsap-fade]");
    $elements.each(function () {
        const $el = $(this);
        const type = $el.data("gsap-fade");
        const fromVars = { autoAlpha: 0 };

        const defaultAmount = 50;
        let amount = defaultAmount;

        if ($el.is("[data-fade-amount]")) {
            amount = parseFloat($el.data("fade-amount"));
        }

        if (isMobile()) {
            if ($el.is("[data-fade-amount-mobile]")) {
                amount = parseFloat($el.data("fade-amount-mobile"));
            }
        } else if ($el.is("[data-fade-amount-desktop]")) {
            amount = parseFloat($el.data("fade-amount-desktop"));
        }

        switch (type) {
            case "left":
                fromVars.x = -amount;
                break;
            case "right":
                fromVars.x = amount;
                break;
            case "top":
                fromVars.y = -amount;
                break;
            case "bottom":
                fromVars.y = amount;
                break;
            case "only":
            default:
                break; // only fade
        }

        gsap.from($el[0], {
            ...fromVars,
            ease: "power2.out",
            duration: 1,
            scrollTrigger: {
                trigger: $el[0],
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
        });
    });
}
