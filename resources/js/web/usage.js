import $ from "jquery";
import { startLoader, hideLoader, transitIn } from "./template/loader";
import imagesLoaded from "imagesloaded";
import { initKineticSliderVoid } from "./plugins/rgbKineticSlider";

const content = document.querySelector("body");
const imgLoad = imagesLoaded(content);

window.imagesLoaded = imagesLoaded; // Make it globally available

$(function () {
    // startLoader();
    transitIn();

    imgLoad.on("done", (instance) => {
        hideLoader();
        initKineticSliderVoid();
    });
});
