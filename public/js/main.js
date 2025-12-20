'use strict';


$(window).scroll(function() {
	if ($(document).scrollTop() > 200	) {
		$(".navbar").addClass("customNav");
	} else {
		$(".navbar").removeClass("customNav");
	}
});

$('.home-products').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})


document.getElementById('reservation-form').addEventListener('submit', function(e) {
e.preventDefault();
alert('Thank you! Your reservation request has been submitted.');
});


document.querySelector(".cta button").addEventListener("click", () => {
alert("Thank you for joining our Coffee Club!");
});

// Initialize Swiper
// Cube effect
var swiper = new Swiper(".mySwiper", {
	effect: "cube",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	cubeEffect: {
		shadow: false,
		slideShadows: true,
		shadowOffset: 20,
		shadowScale: 0.94,
	},
	pagination: {
		el: ".swiper-pagination",
	},
});
// Initialize Swiper
// Flip effect
var swiper = new Swiper(".flipSwiper", {
	effect: "flip",
	grabCursor: true,
	pauseOnMouseEnter: true,
    speed: 2000,
	loop: true,
	autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
	pagination: {
		el: ".swiper-pagination",
	},
	navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//////// Sticky Navbar


// Add class active
$(document).ready(function() {
	var url = window.location.href;
	$('.myNav-nav a[href="url"]').parent().addClass('active');
	$('.myNav-nav a').filter(function() {
		return this.href == url;
	}).parent().addClass('active');
});

// Dropdown menu
$(document).ready(function() {
    $(".hidden-menu").click(function() {
		$(this).parent('.dropdown-nav').children('.sub-drop').toggleClass("sub-menu sub-menu-small");
    });
	
	$(".menu-list-sm li").click(function() {
		$(this).children(".menu-sublist-sm").toggleClass("menu-sublist-sm-vis");
	});
});

// Toggle menu function
$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('.nav-container').toggleClass('mob-container');
    });
});