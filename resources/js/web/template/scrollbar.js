import Scrollbar from "smooth-scrollbar";
import ScrollTrigger from "gsap/ScrollTrigger";
import { isMobile } from "./../utils";
import $ from "jquery";

// =======================================================================================
// Smooth Scrollbar
// Source: https://github.com/idiotWu/smooth-scrollbar/
// =======================================================================================

if ($("body").hasClass("tt-smooth-scroll")) {
    // Not for mobile devices!
    if (!isMobile()) {
        // AnchorPlugin (URL with hash links load in the right position)
        // https://github.com/idiotWu/smooth-scrollbar/issues/440
        // ==================================
        class AnchorPlugin extends Scrollbar.ScrollbarPlugin {
            static pluginName = "anchor";

            onHashChange = () => {
                this.jumpToHash(window.location.hash);
            };

            onClick = (event) => {
                const { target } = event;
                if (target.tagName !== "A") {
                    return;
                }
                const hash = target.getAttribute("href");
                if (!hash || hash.charAt(0) !== "#") {
                    return;
                }
                this.jumpToHash(hash);
            };

            jumpToHash = (hash) => {
                if (!hash) {
                    return;
                }
                const { scrollbar } = this;
                scrollbar.containerEl.scrollTop = 0;
                const target = document.querySelector(hash);
                if (target) {
                    scrollbar.scrollIntoView(target, {
                        offsetTop:
                            parseFloat(target.getAttribute("data-offset")) || 0, // Change to set default offset
                    });
                }
            };

            onInit() {
                this.jumpToHash(window.location.hash);
                window.addEventListener("hashchange", this.onHashChange);
                this.scrollbar.contentEl.addEventListener(
                    "click",
                    this.onClick
                );
            }

            onDestory() {
                window.removeEventListener("hashchange", this.onHashChange);
                this.scrollbar.contentEl.removeEventListener(
                    "click",
                    this.onClick
                );
            }
        }

        // usage
        Scrollbar.use(AnchorPlugin);

        // Init Smooth Scrollbar
        // ======================
        Scrollbar.init(document.querySelector("#scroll-container"), {
            damping: 0.05,
            renderByPixel: true,
            continuousScrolling: true,
            alwaysShowTracks: true,
        });

        // 3rd party library setup
        // More info: https://greensock.com/docs/v3/Plugins/ScrollTrigger/static.scrollerProxy()
        // ========================
        let scrollPositionX = 0,
            scrollPositionY = 0,
            bodyScrollBar = Scrollbar.init(
                document.getElementById("scroll-container")
            );

        bodyScrollBar.addListener(({ offset }) => {
            scrollPositionX = offset.x;
            scrollPositionY = offset.y;
        });

        bodyScrollBar.setPosition(0, 0);
        bodyScrollBar.track.xAxis.element.remove();

        // tell ScrollTrigger to use these proxy getter/setter methods for the "body" element:
        ScrollTrigger.scrollerProxy("body", {
            scrollTop(value) {
                if (arguments.length) {
                    bodyScrollBar.scrollTop = value;
                }
                return bodyScrollBar.scrollTop;
            },
        });

        // when smooth scroller updates, tell ScrollTrigger to update() too.
        bodyScrollBar.addListener(ScrollTrigger.update);

        // Move "tt-header" out of "scroll-container"
        // Expl: Since Smooth Scrollbar doesn't support element fixed position inside "scroll-container" move the "tt-header" out of it.
        // ==========================================
        if ($("#tt-header").hasClass("tt-header-fixed")) {
            $("#scroll-container").before($("#tt-header"));
        }
    }
}
