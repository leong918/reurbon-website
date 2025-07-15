// transitions.js
import $ from "jquery";
import { gsap, Expo } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { StartBaseTransition } from "./transition";
import { isMobile } from "./../utils";
import initTemplate from "./theme";

gsap.registerPlugin(ScrollTrigger);

export function transitOut() {
    const tl = gsap.timeline({
        defaults: { duration: 1.2, ease: Expo.easeInOut },
    });

    document.getElementById("loader").classList.remove("loaded");

    // reset loader__count
    tl.to(".loader__count", {
        y: "-100%",
        ease: Expo.easeInOut,
        onComplete: () => {
            document.querySelector(".loader__count .count__text").textContent = "0";
        },
    });

    // loader__wrapper
    tl.to(".loader__wrapper", {
        y: "0%",
        ease: Expo.easeInOut,
    });

    // Hide header and footer
    tl.to("#tt-header", {
        y: -20,
        autoAlpha: 0,
        ease: Expo.easeInOut,
    });

    tl.to(
        "#tt-footer",
        {
            y: -20,
            autoAlpha: 0,
            ease: Expo.easeInOut,
        },
        "<"
    );
}

export function transitIn() {
    const tl = gsap.timeline({
        defaults: { duration: 1.2, ease: Expo.easeInOut },
    });

    // Animate header and footer in
    tl.from("#tt-header", {
        duration: 1.5,
        y: 20,
        autoAlpha: 0,
        ease: Expo.easeInOut,
        clearProps: "all",
    });

    tl.from("#tt-footer", {
        duration: 1.5,
        y: 20,
        autoAlpha: 0,
        ease: Expo.easeInOut,
        clearProps: "all",
    });
}

export function startLoader() {
    const counterElement = document.querySelector(
        ".loader__count .count__text"
    );
    let currentValue = 0;
    function update() {
        if (currentValue < 100) {
            const inc = Math.floor(Math.random() * 10) + 1;
            currentValue = Math.min(currentValue + inc, 100);
            counterElement.textContent = currentValue;
            setTimeout(update, Math.floor(Math.random() * 120) + 25);
        }
    }
    update();
}

export function hideLoader() {
    const tl = gsap.timeline();
    tl.to(".loader__count", {
        duration: 0.8,
        ease: "power2.in",
        y: "100%",
        delay: 1.8,
    })
        .to(".loader__wrapper", {
            duration: 0.8,
            ease: "power4.in",
            y: "-100%",
        })
        .add(() => {
            document.getElementById("loader").classList.add("loaded");
        });

    StartBaseTransition();
    initTemplate();
}
