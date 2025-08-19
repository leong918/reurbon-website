import $ from "jquery";

export function isMobile() {
    // ==============================================
    // Detect touch device (do not remove!!!)
    // Info: https://developer.mozilla.org/en-US/docs/Web/HTTP/Browser_detection_using_the_user_agent#mobile_device_detection
    // ==============================================

    var isMobile = false;
    if ("maxTouchPoints" in navigator) {
        isMobile = navigator.maxTouchPoints > 0;
    } else if ("msMaxTouchPoints" in navigator) {
        isMobile = navigator.msMaxTouchPoints > 0;
    } else {
        const mQ = matchMedia?.("(pointer:coarse)");
        if (mQ?.media === "(pointer:coarse)") {
            isMobile = !!mQ.matches;
        } else if ("orientation" in window) {
            isMobile = true; // deprecated, but good fallback
        } else {
            // Only as a last resort, fall back to user agent sniffing
            isMobile =
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Nokia|Opera Mini|Tablet|Mobile/i.test(
                    navigator.userAgent
                );
        }
    }

    // Add class "is-mobile" to </body>
    if (isMobile) {
        $("body").addClass("is-mobile");
    }

    return isMobile;
}

function calculatePosition(position, container_height, velocity) {
    if (position > container_height) {
        return container_height;
    }
    if (position < 0) {
        return 0;
    }
    return (position += velocity * 0.008);
}
// Make container follow user scroll
export function scrollFollow({
    scrollTriggerId,
    containerId,
    wrapperId,
    minWidth,
    maxWidth,
    duration = 1,
}) {
    ScrollTrigger.getById(scrollTriggerId)?.kill();

    const viewportWidth = $(window).width();
    let velocity = 0;
    let position = 0;
    let container_height =
        $(`#${containerId}`).outerHeight() -
        nav_header.outerHeight() -
        $(`#${wrapperId}`).outerHeight();

    // QuickTo setter (reuses 1 tween under the hood)
    const yTo = gsap.quickTo(`#${wrapperId}`, "y", {
        duration,
        ease: "power3.out",
    });

    if (viewportWidth >= minWidth && viewportWidth <= maxWidth) {
        ScrollTrigger.create({
            id: scrollTriggerId,
            trigger: `#${containerId}`,
            start: `top-=${nav_header.outerHeight()} top`,
            end: `bottom+=${nav_header.outerHeight()} bottom`,
            onUpdate: (self) => {
                velocity = self.getVelocity();
                position = calculatePosition(position, container_height, velocity);
                let clampY = gsap.utils.clamp(0, container_height, position);

                // Instead of gsap.to every frame:
                yTo(clampY);
            },
            onToggle: () => {
                if (position < container_height / 2) {
                    position = 0;
                } else {
                    position = container_height;
                }
                yTo(position);
            },
        });
    } else {
        yTo(0);
    }
}
