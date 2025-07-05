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
