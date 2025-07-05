import $ from "jquery";
import { startLoader, hideLoader, transitOut, transitIn } from "./template/loader";
import imagesLoaded from "imagesloaded";

const content = document.querySelector("body");
const imgLoad = imagesLoaded(content);

$(function () {
    startLoader();
    transitIn();

    imgLoad.on("done", (instance) => {
        hideLoader();
    });
});
