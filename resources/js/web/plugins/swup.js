import Swup from "swup";
import SwupScriptsPlugin from '@swup/scripts-plugin';
import {
    startLoader,
    transitOut,
    transitIn,
    hideLoader,
} from "../template/loader";
import { initKineticSlider } from "./rgbKineticSlider";

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
    // 清零计数并启动加载动画
    document.querySelector(".loader__count .count__text").textContent = "0";
    startLoader();
    transitOut();
});

// 2. Swup 将新内容替换到 DOM 之后
swup.hooks.on("content:replace", () => {
    // 播放入场动画
    transitIn();
});

// 3. 切换完成（浏览器历史、滚动位置都已就绪）
swup.hooks.on("visit:end", () => {
    // 隐藏加载器并收尾
    hideLoader();
    initKineticSlider();
});
