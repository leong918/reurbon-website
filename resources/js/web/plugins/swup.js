import Swup from "swup";
import {
  startLoader,
  transitOut,
  transitIn,
  hideLoader,
} from "../template/loader";

const swup = new Swup();

// 1. 点击链接后、切换开始前
swup.hooks.on("visit:start", () => {
  // 清零数字计数并启动加载器动画
  document.querySelector(".loader__count .count__text").textContent = "0";
  startLoader();
  // 播放出场动画
  transitOut();
});

// 2. Swup 将新内容替换到 DOM 之后
swup.hooks.on("content:replace", () => {
  // 页面内容替换后无特殊操作，保留钩子以便后续扩展
});

// 3. 切换完成（浏览器历史、滚动位置都已就绪）
swup.hooks.on("visit:end", () => {
  // 隐藏加载器并收尾
  transitIn();
  hideLoader();
});
