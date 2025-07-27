import $ from "jquery";
import { HideLoad } from "./template/loader";
import imagesLoaded from "imagesloaded";
import { initKineticSliderVoid } from "./plugins/rgbKineticSlider";
import { initMagicCursor } from "./plugins/magicCursor";
const content = document.querySelector("body");
const imgLoad = imagesLoaded(content);

window.imagesLoaded = imagesLoaded; // Make it globally available

$(function () {
    imgLoad.on("done", (instance) => {
        HideLoad();
        initKineticSliderVoid();
    });
});
