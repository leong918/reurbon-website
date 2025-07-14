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

    // header and footer 隐藏
    tl.to("#tt-header", {
        duration: 1.5,
        y: -20,
        autoAlpha: 0,
        ease: Expo.easeInOut,
    });

    tl.to(
        "#tt-footer",
        {
            duration: 1.5,
            y: -20,
            autoAlpha: 0,
            ease: Expo.easeInOut,
        },
        "<0.2"
    );

    tl.to("#content-wrap", {
        y: 80,
        autoAlpha: 0,
        duration: 1.2,
        ease: Expo.easeInOut,
    });

    // 0. 确保整个 loader 可见
    tl.set("#loader", { autoAlpha: 1 });

    // 1. loader wrapper 从上方滑入
    tl.fromTo(
        ".loader__wrapper",
        { y: "-100%", autoAlpha: 0 },
        { y: "0%", autoAlpha: 1, duration: 0.6, ease: Expo.easeOut }
    );

    // 2. 数字容器弹入
    tl.fromTo(
        ".loader__count",
        { scale: 0.8, autoAlpha: 0 },
        { scale: 1, autoAlpha: 1, duration: 0.6, ease: "back.out(1.7)" },
        "<0.3"
    );

    // 3. 蒙层展开
    tl.fromTo(
        ".ptr-overlay",
        { scaleY: 0, transformOrigin: "top center" },
        { scaleY: 1 },
        "<"
    );

    // 4. 预加载器主体显示
    tl.fromTo(
        ".ptr-preloader",
        { autoAlpha: 0, scale: 0.8 },
        { autoAlpha: 1, scale: 1 },
        "<0.2"
    );
}

export function transitIn() {
    const tl = gsap.timeline({
        defaults: { duration: 1.2, ease: Expo.easeInOut },
    });

    // Hide preloader and overlay
    // tl.to(".ptr-preloader", { autoAlpha: 0 }, 0);

    tl.to(".ptr-overlay", { scaleY: 0, transformOrigin: "top center" }, ">2");

    tl.from("#content-wrap", { y: -80, autoAlpha: 0 });

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
