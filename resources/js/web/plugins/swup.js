import Swup from "swup";
import SwupScriptsPlugin from "@swup/scripts-plugin";
import {
    HideLoad,
    RevealLoad,
} from "../template/loader";
import { initKineticSliderVoid } from "./rgbKineticSlider";
import gsap from "gsap";
let kineticSlider = null;
const loadPixiFilters = () => {
    return new Promise((resolve) => {
        // 如果滤镜已经加载，直接resolve
        if (
            window.PIXI &&
            window.PIXI.filters &&
            window.PIXI.filters.RGBSplitFilter
        ) {
            resolve();
            return;
        }

        // 否则动态加载
        const script = document.createElement("script");
        script.src = "js/pixi-filters.min.js";
        script.onload = resolve;
        document.head.appendChild(script);
    });
};
const initKineticSlider = async () => {
    try {
        // 确保PIXI滤镜已加载
        await loadPixiFilters();

        // 如果已有实例，先销毁
        if (kineticSlider && typeof kineticSlider.destroy === "function") {
            kineticSlider.destroy();
        }

        // 创建新实例
        kineticSlider = initKineticSliderVoid();

        return kineticSlider;
    } catch (error) {
        console.error("初始化Kinetic Slider失败:", error);
        return null;
    }
};
const swup = new Swup({
    animateHistoryBrowsing: true,
    plugins: [
        new SwupScriptsPlugin({
            // Allows scripts to run during page transitions
            runScripts: "async",
        }),
    ],
});

// 1. 点击链接后、切换开始前
swup.hooks.on("link:click", (swup) => {
    // Prevent action if the clicked link is the same as the current page
    if(swup.from.url === swup.to.url) {
        return;
    }
    RevealLoad();
});

swup.hooks.on('visit:start', async () => {
  // Introduce a delay (e.g., 1 second) to ensure that any ongoing animations or asynchronous operations 
  // are completed before proceeding with the next steps in the page transition.
  await new Promise(resolve => setTimeout(resolve, 1000));
});

swup.hooks.replace('animation:out:await', async () => {
  await gsap.to('.transition-fade', { opacity: 0, duration: 0.25 });
});

swup.hooks.replace('animation:in:await', async () => {
  await gsap.fromTo('.transition-fade', { opacity: 0 }, { opacity: 1, duration: 0.25 });
});

// 2. Swup 将新内容替换到 DOM 之后
swup.hooks.on("content:replace", () => {
});

// 3. 切换完成（浏览器历史、滚动位置都已就绪）
swup.hooks.on("visit:end", () => {
    setTimeout(() => {
        HideLoad();
    }, 1000);
    // 隐藏加载器并收尾
    initKineticSlider();

    // update body white-header class check route
    const body = document.getElementById("body");
    let excludedRoutes = [
        "/about",
    ];
    if (excludedRoutes.includes(window.location.pathname)) {
        body.classList.add("white-header");
    } else {
        body.classList.remove("white-header");
    }
    
});
