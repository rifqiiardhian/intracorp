// Copyright 2020
// Author          : Muhammad Rifqi Ardhian
// Project Name    : Intra Corp Website
// Description     : Company Profile Website
// All Rights Reserved

// Animate on Scroll Init
AOS.init();

// Navbar Funtion
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    const navbar = document.getElementById('nav');

    const nav_class = navbar.classList;

    if (document.documentElement.scrollTop >= 70) {
        if (nav_class.contains('shrink') === false) {
            nav_class.toggle('shrink');
        }
    } else if (nav_class.contains('shrink') === true) {
        nav_class.toggle('shrink');
    }
};

$(document).ready(function () {

  $('.btn-nav').on('click', function () {

    $('.animated-icon').toggleClass('open');
  });
});

// Loader Function
document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};

// Toggle Password
$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));

    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// Client Logo Function
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
