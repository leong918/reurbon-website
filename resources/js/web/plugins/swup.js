import Swup from "swup";
import SwupScriptsPlugin from "@swup/scripts-plugin";
import {
    startLoader,
    transitOut,
    transitIn,
    hideLoader,
} from "../template/loader";
import { initKineticSliderVoid } from "./rgbKineticSlider";
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
    plugins: [
        new SwupScriptsPlugin({
            // Allows scripts to run during page transitions
            runScripts: "async",
        }),
    ],
});

// 1. 点击链接后、切换开始前
swup.hooks.on("visit:start", () => {
    // 清零并启动数字加载器
    document.querySelector(".loader__count .count__text").textContent = "0";
    // 播放出场动画
    transitOut();
});

// 2. Swup 将新内容替换到 DOM 之后
swup.hooks.on("content:replace", () => {
    // 播放入场动画
    startLoader();
    transitIn();
});

// 3. 切换完成（浏览器历史、滚动位置都已就绪）
swup.hooks.on("visit:end", () => {
    // 隐藏加载器并收尾
    hideLoader();
    initKineticSlider();
});
