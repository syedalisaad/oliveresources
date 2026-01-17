// Requires jQuery

// Initialize slider:
$(document).ready(function () {
    $(".noUi-handle").on("click", function () {
        $(this).width(50);
    });
    var rangeSlider = document.getElementById("slider-range");
    var moneyFormat = wNumb({
        decimals: 0,
        thousand: ",",
        prefix: "$"
    });
    noUiSlider.create(rangeSlider, {
        start: [1500, 60000],
        step: 1,
        range: {
            min: [0],
            max: [100000]
        },
        format: moneyFormat,
        connect: true
    });

    // Set visual min and max values and also update value hidden form inputs
    rangeSlider.noUiSlider.on("update", function (values, handle) {
        $(".min-value-money").val(values[0]);
        $(".max-value-money").val(values[1]);
        $(".min-value").val(moneyFormat.from(values[0]));
        $(".max-value").val(moneyFormat.from(values[1]));
    });
});


/* document.addEventListener('DOMContentLoaded', function () {
    // Example initialization - adjust settings as needed
    new Slider('#servicesSlider', {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        // Add any responsive breakpoints or other options
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
}); */