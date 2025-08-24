

import { gsap } from "gsap";
import { CustomEase } from "gsap/CustomEase";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import $ from "jquery";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(CustomEase);
export function initGsapGrowWidth() {
    //Need to set ur own max-width
    const $elements = $("[data-gsap-grow]");
    $elements.each(function () {
        const $el = $(this);
        const delay = parseFloat($el.data("delay")) || 0;
        const duration = parseFloat($el.data("duration")) || 1.8;
        const start = $el.data("start") || "top 83%";
        gsap.to($el[0], {
            width: "100%",
            ease: "expo.in",
            duration: duration,
            delay: delay,
            scrollTrigger: {
                trigger: $el[0],
                start: start,
                toggleActions: "play none none none",
            },
        });
    });
}
