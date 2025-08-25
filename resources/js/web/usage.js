import $ from "jquery";
import { HideLoad } from "./template/loader";
import imagesLoaded from "imagesloaded";
import { initKineticSliderVoid } from "./plugins/rgbKineticSlider";
import { initMagicCursor } from "./plugins/magicCursor";

// Import the safe initialization function from swup
import "./plugins/swup";

const content = document.querySelector("body");
const imgLoad = imagesLoaded(content);

window.imagesLoaded = imagesLoaded; // Make it globally available

$(function () {
    imgLoad.on("done", (instance) => {
        HideLoad();
        initKineticSliderVoid();
        
        // Initialize magic cursor safely
        try {
            initMagicCursor();
        } catch (error) {
            console.error('Error initializing magic cursor on initial load:', error);
        }
    });
});
