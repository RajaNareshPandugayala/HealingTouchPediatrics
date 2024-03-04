$('.promo-slider').slick({
    slidesToShow: 5,
    prevArrow: '<i class="flaticon-right-arrow prev"></i>',
    nextArrow: '<i class="flaticon-right-arrow"></i>',
    responsive: [{
        breakpoint: 992,
        settings: {
            slidesToShow: 3
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 3
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 2
        }
    }
    ]
});


$('.property-slider').slick({
    slidesToShow: 4,
    prevArrow: '<i class="flaticon-right-arrow prev"></i>',
    nextArrow: '<i class="flaticon-right-arrow"></i>',
    responsive: [{
        breakpoint: 992,
        settings: {
            slidesToShow: 4
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 1
        }
    }
    ]
});


$('.step-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    // arrows: false,
    draggable: false,
    prevArrow: $('.prev-step'),
    nextArrow: $('.next-step')
});


$(function () {
    $("#sidebar").stick_in_parent({
        offset_top: 100
    });
});

// Add smooth scrolling to all links
$(".check-list.term li a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 120
        }, 800, function () {

            // Add hash (#) to URL when done scrolling (default click behavior)
            // window.location.hash = hash;
        });
    } // End if
});


$('.client-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    fade: false,
    cssEase: 'linear',
    autoplay: true,
    arrows: true,
    prevArrow: '<i class="flaticon-right-arrow prev"></i>',
    nextArrow: '<i class="flaticon-right-arrow"></i>',
});

$('.specialist-slider').slick({
    slidesToShow: 6,
    prevArrow: '<i class="flaticon-right-arrow prev"></i>',
    nextArrow: '<i class="flaticon-right-arrow"></i>',
    responsive: [{
        breakpoint: 992,
        settings: {
            slidesToShow: 6
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 4
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 2
        }
    }
    ]
});


$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 100) {
        //clearHeader, not clearheader - caps H
        $(".navbar-fixed-top").addClass("topHeader");
    } else {
        $(".navbar-fixed-top").removeClass("topHeader");
    }
}); //missing );

//window.addEventListener("scroll", function() {showFunction()});

function showFunction() {
    if ((document.body.scrollTop > 500 || document.documentElement.scrollTop > 500)) {
        document.getElementById("toptexts2").style.display = "block";
        document.getElementById("toptexts22").style.display = "block";
    } else {
        document.getElementById("toptexts2").style.display = "none";
        document.getElementById("toptexts22").style.display = "none";
    }
}
