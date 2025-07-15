import { gsap } from "gsap";
import { CustomEase } from "gsap/CustomEase";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import $ from "jquery";
import { isMobile } from "../utils";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CustomEase);
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
        const delay = parseFloat($el.data("delay")) || 0;
        const duration = parseFloat($el.data("duration")) || 1.8;
        const start = $el.data("start") || "top 83%";
        CustomEase.create("easeFastInSlowOut", "M0,0 C0.2,0 0,1 1,1");

        gsap.from($el[0], {
            ...fromVars,
            ease: "easeFastInSlowOut",
            duration: duration,
            delay: delay,
            scrollTrigger: {
                trigger: $el[0],
                start: start,
                toggleActions: "play none none reverse",
            },
        });
    });
}
