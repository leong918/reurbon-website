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
            // 允许在页面切换时执行脚本
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
