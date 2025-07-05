import $ from "jquery";
import { gsap, Expo } from "gsap";

export function StartBaseTransition() {
    let tl = gsap.timeline();
    let isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

    // Page header image appear
    if ($(".ph-image").length) {
        if ($("#page-header").hasClass("ph-bg-image")) {
            tl.from(
                ".ph-image img, .ph-video",
                {
                    duration: 2,
                    y: 80,
                    autoAlpha: 0,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                0.8
            );
        } else {
            tl.from(
                ".ph-image",
                {
                    duration: 2,
                    y: 80,
                    autoAlpha: 0,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                1.2
            );
        }
    }

    // Page header elements appear (elements with class "ph-appear")
    var $phAppear = $(".ph-appear");
    if ($phAppear.length) {
        tl.from(
            $phAppear,
            {
                duration: 2,
                y: 40,
                autoAlpha: 0,
                stagger: 0.3,
                ease: Expo.easeOut,
                clearProps: "all",
            },
            1.5
        );
    }

    // Portfolio interactive elements appear
    var $pi = $(".portfolio-interactive");
    var $piItem = $(".portfolio-interactive-item");
    var $piGhost = $(".portfolio-interactive-ghost");
    var $piPagination = $(".portfolio-interactive .tt-pagination");

    if ($pi.length) {
        if ($pi.hasClass("pi-full")) {
            if ($pi.hasClass("pi-inline")) {
                tl.from(
                    $piItem,
                    {
                        duration: 2,
                        y: 60,
                        autoAlpha: 0,
                        stagger: 0.15,
                        ease: Expo.easeOut,
                        clearProps: "all",
                    },
                    1.3
                );
            } else {
                tl.from(
                    $piItem,
                    {
                        duration: 2,
                        y: 100,
                        autoAlpha: 0,
                        stagger: 0.15,
                        ease: Expo.easeOut,
                        clearProps: "all",
                    },
                    1.3
                );
            }

            if ($piGhost.length) {
                $piGhost.wrapInner('<div class="pi-ghost-appear"></div>');
                tl.from(
                    ".pi-ghost-appear",
                    {
                        duration: 2,
                        y: 80,
                        autoAlpha: 0,
                        ease: Expo.easeOut,
                        clearProps: "all",
                    },
                    1.5
                );
            }

            if ($piPagination.length) {
                $piPagination.wrap('<div class="pi-pagination-appear"></div>');
                tl.from(
                    ".pi-pagination-appear",
                    {
                        duration: 2,
                        y: 60,
                        autoAlpha: 0,
                        ease: Expo.easeOut,
                        clearProps: "all",
                    },
                    3
                );
            }
        }
    }

    // Portfolio split elements appear
    var $portfolioSplit = $(".portfolio-split");
    var $psplItem = $(".portfolio-split-item");
    var $psplImages = $(".pspl-images-inner");
    var $psplGhost = $(".pspl-ghost");
    if ($portfolioSplit.length) {
        tl.from(
            $psplItem,
            {
                duration: 2,
                y: 40,
                autoAlpha: 0,
                stagger: 0.1,
                ease: Expo.easeOut,
                clearProps: "all",
            },
            1.3
        );
        tl.from(
            $psplImages,
            {
                duration: 2,
                scale: 1.1,
                autoAlpha: 0,
                ease: Expo.easeOut,
                clearProps: "all",
            },
            1
        );
        if ($portfolioSplit.hasClass("pspl-reverse")) {
            tl.from(
                $psplGhost,
                {
                    duration: 2,
                    x: 40,
                    autoAlpha: 0,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                2
            );
        } else {
            tl.from(
                $psplGhost,
                {
                    duration: 2,
                    x: -40,
                    autoAlpha: 0,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                2
            );
        }
    }

    // Portfolio slider appear (full screen slider)
    var $portfolioSlider = $(".tt-portfolio-slider");
    var $psiElem = $(".tt-psc-elem");
    if ($portfolioSlider.length) {
        tl.from(
            $portfolioSlider,
            {
                duration: 2,
                autoAlpha: 0,
                y: 40,
                ease: Expo.easeOut,
                clearProps: "all",
            },
            1
        );
        if ($psiElem.length) {
            $psiElem.wrap('<div class="tt-ps-appear"></div>');
            tl.fromTo(
                ".tt-ps-appear",
                { autoAlpha: 0, x: 40, scaleX: 1.1, transformOrigin: "left" },
                {
                    duration: 1.5,
                    autoAlpha: 1,
                    x: 0,
                    scaleX: 1,
                    transformOrigin: "left",
                    stagger: 0.15,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                1.4
            );
        }
    }

    // Portfolio carousel appear
    var $portfolioCarousel = $(".tt-portfolio-carousel");
    var $pciTitle = $(".tt-pci-title");
    var $pciCategory = $(".tt-pci-category");
    if ($portfolioCarousel.length) {
        tl.from(
            $portfolioCarousel,
            {
                duration: 2,
                autoAlpha: 0,
                y: 40,
                ease: Expo.easeOut,
                clearProps: "all",
            },
            1
        );
        if ($pciTitle.length) {
            tl.fromTo(
                $pciTitle,
                { autoAlpha: 0, x: 100, scaleX: 1.3, transformOrigin: "left" },
                {
                    duration: 1.5,
                    autoAlpha: 1,
                    x: 0,
                    scaleX: 1,
                    transformOrigin: "left",
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                1.4
            );
        }
        if ($pciCategory.length) {
            tl.fromTo(
                $pciCategory,
                { autoAlpha: 0, x: 60, scaleX: 1.3, transformOrigin: "left" },
                {
                    duration: 1.5,
                    autoAlpha: 1,
                    x: 0,
                    scaleX: 1,
                    transformOrigin: "left",
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                1.6
            );
        }
    }

    // Portfolio hover carousel appear
    var $portfolioHoverCarousel = $(".tt-portfolio-hover-carousel");
    var $portfolioHoverCarouselImages = $(
        ".tt-portfolio-hover-carousel-images"
    );
    var $portfolioHoverCarouselItem = $portfolioHoverCarousel
        .find(".swiper-slide-visible")
        .find(".tt-phc-item");
    var $portfolioHoverCarouselCounter = $(".tt-phc-counter");
    if ($portfolioHoverCarousel.length) {
        if ($portfolioHoverCarouselImages.length) {
            tl.from(
                $portfolioHoverCarouselImages,
                {
                    duration: 2,
                    autoAlpha: 0,
                    y: 40,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                1
            );
        }
        if ($portfolioHoverCarouselItem.length) {
            tl.from(
                $portfolioHoverCarouselItem,
                {
                    duration: 2,
                    autoAlpha: 0,
                    x: 180,
                    scaleX: 1.3,
                    stagger: 0.15,
                    ease: Expo.easeOut,
                    clearProps: "all",
                },
                1.4
            );
        }
        if ($portfolioHoverCarouselCounter.length) {
            tl.from(
                $portfolioHoverCarouselCounter,
                {
                    duration: 2,
                    y: 20,
                    autoAlpha: 0,
                    ease: Expo.easeInOut,
                    clearProps: "all",
                },
                0.4
            );
        }

        setTimeout(function () {
            $portfolioHoverCarousel.addClass("tt-phc-ready");
        }, 2000);
    }

    // Sliding sidebar trigger appear
    var $ssWrap = $(".tt-sliding-sidebar-wrap");
    var $ssTrigger = $(".tt-sliding-sidebar-trigger");
    if ($ssWrap.length) {
        if (!isMobile) {
            if ($ssWrap.hasClass("tt-ss-right")) {
                tl.from(
                    $ssTrigger,
                    { duration: 1.5, autoAlpha: 0, x: 50, ease: Expo.easeOut },
                    2
                );
            } else {
                tl.from(
                    $ssTrigger,
                    { duration: 1.5, autoAlpha: 0, x: -50, ease: Expo.easeOut },
                    2
                );
            }
        } else {
            tl.from(
                $ssTrigger,
                { duration: 1.5, autoAlpha: 0, y: 20, ease: Expo.easeOut },
                2
            );
        }
    }

    // Blog elements appear
    var $blogElem = $("#blog-list, .tt-blog-post, .tt-sidebar");
    if ($blogElem.length) {
        tl.from(
            $blogElem,
            {
                duration: 2,
                autoAlpha: 0,
                y: 80,
                ease: Expo.easeOut,
                clearProps: "all",
            },
            1
        );
    }
}
