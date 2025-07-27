import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export const swiperClients = () => {
    const swiper = new Swiper(".swiper-clients", {
        slidesPerView: 6,
        spaceBetween: 0,
        loop: true,
        loopAdditionalSlides: 6,
        speed: 5000,
        allowTouchMove: false,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 6,
            },
        },
    });

    // Pause autoplay when the swiper is not visible
    const swiperElement = document.querySelector(".swiper-clients");
    if (swiperElement) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        swiper.autoplay.start();
                    } else {
                        swiper.autoplay.stop();
                    }
                });
            },
            { threshold: 0.1 }
        );
        observer.observe(swiperElement);
    }
};

export const swiperClientFeedback = () => {
    const swiper = new Swiper(".swiper-client-feedback", {
        slidesPerView: 3,
        spaceBetween: 38,
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1280: {
                slidesPerView: 3,
            },
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    // Pause autoplay when the swiper is not visible
    const swiperElement = document.querySelector(".swiper-client-feedback");
    if (swiperElement) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        swiper.autoplay.start();
                    } else {
                        swiper.autoplay.stop();
                    }
                });
            },
            { threshold: 0.1 }
        );
        observer.observe(swiperElement);
    }
};
