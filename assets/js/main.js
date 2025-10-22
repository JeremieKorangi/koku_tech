jQuery(function ($) {
    'use strict';

	// Header Sticky
	$(window).on('scroll',function() {
		if ($(this).scrollTop() > 120){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		}
	});
	
	// Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});

	// Sidebar Modal
	$(".burger-menu").on('click',  function() {
		$('.sidebar-modal').toggleClass('active');
	});
	$(".sidebar-modal-close-btn").on('click',  function() {
		$('.sidebar-modal').removeClass('active');
	});

	// Search Popup JS
	$('.close-btn').on('click',function() {
		$('.search-overlay').fadeOut();
		$('.search-btn').show();
		$('.close-btn').removeClass('active');
	});
	$('.search-btn').on('click',function() {
		$(this).hide();
		$('.search-overlay').fadeIn();
		$('.close-btn').addClass('active');
	});

	// Home Sliders
	$('.home-sliders').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		mouseDrag: true,
		items:1,
		autoHeight:true,
		dots: true,
		autoplay: true,
		smartSpeed: 500,
		autoplayHoverPause: true,
		navText: [
			"<i class='flaticon-left'></i>",
			"<i class='flaticon-right-1'></i>",
		],
	});

	//Slider Text Animation
	$(".home-sliders").on("translate.owl.carousel", function(){
		$(".main-banner-content b, .main-banner-content h1, .main-banner-content .typewrite").removeClass("animate__animated animate__fadeInUp").css("opacity", "0");
		$(".main-banner-content p").removeClass("animate__animated animate__fadeInDown").css("opacity", "0");
		$(".main-banner-content a").removeClass("animate__animated animate__fadeInDown").css("opacity", "0");
		$(".banner-image").removeClass("animate__animated animate__slideInUp").css("opacity", "0");
	});
	
	$(".home-sliders").on("translated.owl.carousel", function(){
		$(".main-banner-content b, .main-banner-content h1, .main-banner-content .typewrite").addClass("animate__animated animate__fadeInUp").css("opacity", "1");
		$(".main-banner-content p").addClass("animate__animated animate__fadeInDown").css("opacity", "1");
		$(".main-banner-content a").addClass("animate__animated animate__fadeInDown").css("opacity", "1");
		$(".banner-image").addClass("animate__animated animate__slideInUp").css("opacity", "1");
	});
	
	// Event Slider
	$('.event-slider').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplayHoverPause: true,
		autoplay: true,
		smartSpeed: 1000,
		margin: 0,
		navText: [
			"<i class='flaticon-left'></i>",
			"<i class='flaticon-right-1'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 2
			},
			1200: {
				items: 5
			}
		}
	});
	
	// Speaker Slider
	$('.speaker-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		autoplayHoverPause: true,
		autoplay: true,
		smartSpeed: 1000,
		margin: 0,
		navText: [
			"<i class='flaticon-left'></i>",
			"<i class='flaticon-right'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 3
			},
			1200: {
				items: 5
			}
		}
	});
	
	// Pricing Slider
	$('.pricing-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		autoplayHoverPause: true,
		autoplay: true,
		smartSpeed: 1000,
		margin: 30,
		navText: [
			"<i class='flaticon-left'></i>",
			"<i class='flaticon-right'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});
	
	// Features Slider
	$('.features-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		autoplayHoverPause: true,
		autoplay: true,
		smartSpeed: 1000,
		margin: 30,
		navText: [
			"<i class='flaticon-left'></i>",
			"<i class='flaticon-right'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 3
			},
			1200: {
				items: 4
			}
		}
	});

	// Testimonial Slider
	$('.testimonial-slider').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplayHoverPause: true,
		autoplay: true,
		smartSpeed: 1000,
		margin: 0,
		navText: [
			"<i class='flaticon-left'></i>",
			"<i class='flaticon-right-1'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 1
			},
			1200: {
				items: 1
			}
		}
	});

	// Tabs
	(function ($) {
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li a').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});
	})(jQuery);
	
	// Odometer JS
	$('.odometer').appear(function(e) {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});

	// Go to Top
	$(function(){
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 600) $('.go-top').addClass('active');
			if (scrolled < 600) $('.go-top').removeClass('active');
		});  
		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  0);
		});
	});

	// FAQ Accordion
	$(function() {
		$('.accordion').find('.accordion-title').on('click', function(){
			// Adds Active Class
			$(this).toggleClass('active');
			// Expand or Collapse This Panel
			$(this).next().slideToggle('fast');
			// Hide The Other Panels
			$('.accordion-content').not($(this).next()).slideUp('fast');
			// Removes Active Class From Other Titles
			$('.accordion-title').not($(this)).removeClass('active');		
		});
	});

	// Subscribe form
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
		// handle the invalid form...
			formErrorSub();
			submitMSGSub(false, "Please enter your email correctly.");
		} else {
			// everything looks good!
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "Thank you for subscribing!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animate__animated animate__shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animate__animated animate__shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = "validation-success";
		} else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
	}
	// AJAX MailChimp
	$(".newsletter-form").ajaxChimp({
		url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
		callback: callbackFunction
	});
	
	// Count Time 
	function makeTimer() {
		var endTime = new Date("April 30, 2028 17:00:00 PDT");
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days").html(days + "<span>Days</span>");
		$("#hour").html(hours + "<span>Hours</span>");
		$("#minu").html(minutes + "<span>minutes</span>");
		$("#seco").html(seconds + "<span>seconds</span>");
	}
	setInterval(function() { makeTimer(); }, 300);
    
	// WOW JS
	$(window).on('load', function () {
		if ($(".wow").length) { 
			// Checks if there are elements with the class "wow" on the page
			
			var wow = new WOW({
				// Initializes the WOW.js library with custom settings
				boxClass: 'wow', // CSS class used to define which elements to animate (default is 'wow')
				animateClass: 'animated', // CSS class applied to animate elements (default is 'animated')
				offset: 20, // Distance in pixels from the element's bottom before triggering the animation (default is 0)
				mobile: true, // Enable or disable animations on mobile devices (default is true)
				live: true, // Watch for new elements being added to the page and animate them (default is true)
			});
			
			// Initialize the WOW.js instance
			wow.init();
		}
	});

    // Preloader
    jQuery(window).on('load', function () {
        $('.preloader').fadeOut()
    })

	// Switch Btn
	$('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
	
}(jQuery));

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('wezet_theme', themeName);
    document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('wezet_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}
// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('wezet_theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
      document.getElementById('slider').checked = true;
    }
})();