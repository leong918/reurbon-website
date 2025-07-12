import $ from "jquery";
import { startLoader, hideLoader, transitIn } from "./template/loader";
import imagesLoaded from "imagesloaded";
import RGBKineticSlider from "./plugins/rgbKineticSlider";

const content = document.querySelector("body");
const imgLoad = imagesLoaded(content);

window.imagesLoaded = imagesLoaded; // Make it globally available

$(function () {
    startLoader();
    transitIn();

    imgLoad.on("done", (instance) => {
        hideLoader();
    });

    const images = ["images/home/banner.jpg"];

    new RGBKineticSlider({
        slideImages: images,
        backgroundDisplacementSprite: "images/home/displacement.jpg",
        canvasId: "kinetic-slider",
        width: window.innerWidth,
        height: window.innerHeight,
        mirageFreq: 8,
        mirageAmp: 0.015,
        mirageSpeed: 3,
        cursorScaleIntensity: 0.3,
        cursorMomentum: 0.1,
    });
});
