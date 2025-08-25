//All custom js for page
import $ from "jquery";
import { scrollFollow, dropdownSelector, mouseMoveParallax, animateScrollAnimation } from "./utils";

function scrollFollowPortfolio() {
    if ($("#portfolio-category-wrapper").length) {
        scrollFollow({
            scrollTriggerId: "portfolioScroll",
            containerId: "portfolio-container",
            wrapperId: "portfolio-category-wrapper",
            minWidth: 600,
            maxWidth: 768,
        });
    }
}


// Need to initial in swup in order to render again because it change element instead of render the whole dom
export function initialPageFunction() {
    scrollFollowPortfolio();
    //portfolio grid item
    $("#portfolio-filter-container .item").off("click").on("click", function () {
        $("#portfolio-filter-container .item").removeClass("active");
        $(this).addClass("active");
        const category_filter = $(this).data("category");
        const cards = $("#portfolio-items-container .card");

        let count = 0;

        cards.each((index, card) => {
            const $card = $(card); // wrap in jQuery
            $card.removeClass("grid-item-row");
            $card.removeClass("grid-item-first-row");

            const cardCategory = $card.data("category"); // now works
            if (category_filter === "All" || category_filter == cardCategory) {
                $card.show(); // jQuery show
                if (count < 2) {
                    $card.addClass("grid-item-first-row");
                } else {
                    $card.addClass("grid-item-row");
                }
                count++;
            } else {
                $card.hide(); // jQuery hide
            }
        });
        scrollFollowPortfolio();
    });

    //dropdown element
    dropdownSelector();
    mouseMoveParallax();
    animateScrollAnimation();
}
