$(".st-word").each(function() {
    // Some Vars
    var elText,
        openSpan = '<span class="first-word">',
        closeSpan = "</span>";

    // Make the text into array
    elText = $(this).text().split(" ");

    // Adding the open span to the beginning of the array
    elText.unshift(openSpan);

    // Adding span closing after the first word in each sentence
    elText.splice(2, 0, closeSpan);

    // Make the array into string
    elText = elText.join(" ");

    // Change the html of each element to style it
    $(this).html(elText);
});

// trending package slider
$(".center").slick({
    slidesToShow: 5,
    autoplay: true,
    autoplaySpeed: 2000,

    slidesToScroll: 2,
    prevArrow: "<i class='fas fa-chevron-circle-left'></i>",
    nextArrow: "<i class='fas fa-chevron-circle-right'></i>",
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1,
            },
        },
    ],
});

$(".center-two").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 4000,
    slidesToScroll: 2,
    prevArrow: "<i class='fas fa-chevron-circle-left'></i>",
    nextArrow: "<i class='fas fa-chevron-circle-right'></i>",
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 1,
            },
        },
    ],
});

// cart
$(".check__cart").click(function() {
    $("#cart").addClass("open");
    $("body").addClass("open-opacity");
});
const $cart = $("#cart");
$(document).mouseup((e) => {
    if (!$cart.is(e.target) && // if the target of the click isn't the container...
        $cart.has(e.target).length === 0
    ) {
        // ... nor a descendant of the container
        $cart.removeClass("open");
        $("body").removeClass("open-opacity");
    }
});

$(".closebtn").click(function() {
    $("#cart").removeClass("open");
    $("#profile").removeClass("open");
    $("body").removeClass("open-opacity");
});

$(".dropdown-trigger").click(function() {
    $(".dropdown-content").toggle("400");
});