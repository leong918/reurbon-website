import Swup from "swup";
import SwupScriptsPlugin from "@swup/scripts-plugin";
import { HideLoad, RevealLoad } from "../template/loader";
import { initKineticSliderVoid } from "./rgbKineticSlider";
import { initMagicCursor } from "./magicCursor";
import { initialPageFunction } from "../page";
import gsap from "gsap";
import $ from "jquery";
let kineticSlider = null;
let magicCursorInstance = null;
const cleanupMagicCursor = () => {
    try {
        // Remove event listeners from document
        if (window.mouseMoveHandler) {
            document.removeEventListener('mousemove', window.mouseMoveHandler);
        }
        
        // Remove jQuery event handlers
        if (window.mouseLeaveHandler) {
            $(document).off("mouseleave", window.mouseLeaveHandler);
        }
        if (window.mouseEnterHandler) {
            $(document).off("mouseenter", window.mouseEnterHandler);
        }
        if (window.mouseMoveShowHandler) {
            $(document).off("mousemove", window.mouseMoveShowHandler);
        }
        
        // Remove GSAP ticker if exists
        if (window.updatePositionTicker) {
            gsap.ticker.remove(window.updatePositionTicker);
        }
        
        // Remove all jQuery event handlers from magnetic elements
        $(".magnetic-wrap").off();
        $(".cursor-alter, .tt-main-menu-list > li > a, .tt-main-menu-list > li > .tt-submenu-trigger > a").off();
        $(".tt-ol-submenu-caret-wrap .magnetic-wrap").off();
        $("[data-cursor]").off();
        $(".swiper").off();
        $(".cursor-close").off();
        $(".blog-interactive-item").off();
        $("a, button, .tt-btn, .tt-form-control, .tt-form-radio, .tt-form-check, .hide-cursor").off();
        $("a").off();
        
        // Remove magnetic wraps but keep the items
        $('.magnetic-wrap').each(function() {
            const magneticItem = $(this).find('.magnetic-item');
            $(this).replaceWith(magneticItem);
        });
        
        // Reset ball styles
        const ball = document.getElementById('ball');
        if (ball) {
            gsap.set(ball, { clearProps: "all" });
        }
        
        console.log('Magic cursor cleaned up');
    } catch (error) {
        console.warn('Error cleaning up magic cursor:', error);
    }
};

const initMagicCursorSafe = () => {
    try {
        // Clean up any existing magic cursor first
        cleanupMagicCursor();
        
        // Magic cursor HTML should already exist in the layout, 
        // but check if ball element exists
        const ball = document.getElementById('ball');
        if (!ball) {
            console.warn('Magic cursor ball element not found');
            return;
        }
        
        // Initialize magic cursor
        magicCursorInstance = initMagicCursor();
        console.log('Magic cursor initialized');
    } catch (error) {
        console.error('Error initializing magic cursor:', error);
    }
};

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
    if (swup.from.url === swup.to.url) {
        return;
    }
    RevealLoad();
});

swup.hooks.on("visit:start", async () => {
    // Clean up magic cursor before page transition
    cleanupMagicCursor();
    
    // Introduce a delay (e.g., 1 second) to ensure that any ongoing animations or asynchronous operations
    // are completed before proceeding with the next steps in the page transition.
    await new Promise((resolve) => setTimeout(resolve, 1000));
});

swup.hooks.replace("animation:out:await", async () => {
    await gsap.to(".transition-fade", { opacity: 0, duration: 0.25 });
});

swup.hooks.replace("animation:in:await", async () => {
    await gsap.fromTo(
        ".transition-fade",
        { opacity: 0 },
        { opacity: 1, duration: 0.25 }
    );
});

// 2. Swup 将新内容替换到 DOM 之后
swup.hooks.on("content:replace", () => {
    // Reinitialize magic cursor after content is replaced
    setTimeout(() => {
        initMagicCursorSafe();
    }, 100);
});

// 3. 切换完成（浏览器历史、滚动位置都已就绪）
swup.hooks.on("visit:end", () => {
    setTimeout(() => {
        HideLoad();
    }, 1000);
    // 隐藏加载器并收尾
    initKineticSlider();
    
    // Ensure magic cursor is properly initialized
    setTimeout(() => {
        if (!magicCursorInstance || !document.getElementById('ball')) {
            initMagicCursorSafe();
        }
    }, 200);
});
