import imagesLoaded from "imagesloaded";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// --------------------------------------------- //
// Loader & Loading Animation Start
// --------------------------------------------- //
const content = document.querySelector("body");
const imgLoad = imagesLoaded(content);
// const loadingWrap = document.querySelector(".loading-wrap");
// const loadingItems = loadingWrap.querySelectorAll(".loading__item");
// const fadeInItems = document.querySelectorAll(".loading__fade");

function startLoader() {
    let counterElement = document.querySelector(".loader__count .count__text");
    let currentValue = 0;
    function updateCounter() {
        if (currentValue < 100) {
            let increment = Math.floor(Math.random() * 10) + 1;
            currentValue = Math.min(currentValue + increment, 100);
            counterElement.textContent = currentValue;
            let delay = Math.floor(Math.random() * 120) + 25;
            setTimeout(updateCounter, delay);
        }
    }
    updateCounter();
}
startLoader();

imgLoad.on("done", (instance) => {
    hideLoader();
});

function hideLoader() {
  gsap.to(".loader__count", { duration: 0.8, ease: 'power2.in', y: "100%", delay: 1.8 });
  gsap.to(".loader__wrapper", { duration: 0.8, ease: 'power4.in', y: "-100%", delay: 2.2 });
  setTimeout(() => {
    document.getElementById("loader").classList.add("loaded");
  }, 1000);
}
