/*
Template Name: Eaterie
Author: Ingrid Kuhn
Author URI: themeforest/user/ingridk
Version: 1.0
*/
$(document).ready(function() {


    // Slick Slider 3 items

    $('.carousel').slick({
        autoplaySpeed: 10000,
        speed: 600,
        slidesToShow: 3,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        arrows: true,
        dots: true,
        swipeToSlide: true,
        infinite: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // Slick slider 2 items

    $('.carousel-2-items').slick({
        autoplaySpeed: 10000,
        speed: 600,
        slidesToShow: 2,
        pauseOnHover: false,
        dots: true,
        pauseOnDotsHover: true,
        cssEase: 'linear',
        arrows: true,
        dots: true,
        swipeToSlide: true,
        infinite: true,
        autoplay: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        },

            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // Navbar Shrink on Scroll

    $(window).scroll(function() {
        if ($(document).scrollTop() > 200) {
            $('.navbar').addClass('shrink');
        } else {
            $('.navbar').removeClass('shrink');
        }
    });

    // Add hover effect to dropdown menus

    jQuery("ul.nav li.dropdown").on({
        mouseenter: function () {
            jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
        },
        mouseleave: function () {
            jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
        }
    });


    //Smooth Scroll 

    $('.page-scroll a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 2500, 'easeInOutExpo');
        event.preventDefault();
    });

    //	Back to Top Link

    var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(400);
        } else {
            $('.back-to-top').fadeOut(400);
        }
    });


    // Date Time Picker
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD hh:mm A',
        allowInputToggle: true

    });


    // Magnific Popup

    $('.gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        fixedContentPos: false,
        gallery: {
            enabled: true
        },
        titleSrc: 'title',
        titleSrc: function(item) {
            return '<a href="' + item.el.attr('href') + '">' + item.el.attr('title') + '</a>';
        }
    });


}); // end document ready



// Window load function

$(window).load(function() {

    // Page Preloader 	

    $("#preloader").fadeOut("slow");

    //initialize skrollr

    skrollr.init({
        smoothScrolling: true,
        smoothScrollingDuration: 500,
        forceHeight: false
    });

    // disable skrollr if using handheld device
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        skrollr.init().destroy();
        ParallaxScroll.init().destroy();
    }

    //On Click  function
    $(document).on('click', function() {

        //Navbar toggle close on click
        $('.navbar .collapse').collapse('hide');

    })

    //Isotope Nav Filter

    $('.category a').on('click', function() {
        $('.category .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });

    //Isotope 

    var $container = $('#lightbox');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
            layoutMode: 'masonry'
        }

    });
    $(window).smartresize(function() {
        $container.isotope({
            columnWidth: '.col-sm-3'
        });
    });



}); // end window load