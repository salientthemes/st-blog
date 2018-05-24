jQuery(window).load(function() {
	// fixed header
	jQuery('body').addClass('fixed-header dark-header'); 

	// search toggle
	jQuery('.st-blog-head-search-toggler').click(function() { 
		// console.log('clicked');
		jQuery('body').toggleClass('head-search-active');

		// focus search input
		if(jQuery('body').hasClass('head-search-active')) {
			$('header.site-header .st-blog-head-search input.search-field').focus();
		}
	});

	// slick_init
	jQuery("#banner .slick-slider").slick({
		// normal options...
		arrows: true,
		autoplay: true,
		autoplaySpeed: 4000,
		draggable: true,
		infinite: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
		speed: 800,
		useCSS: true,
	});

	jQuery("#featured .slick-slider").slick({
		// normal options...
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000,
		draggable: true,
		infinite: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		slidesToShow: 4,
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
		speed: 800,
		useCSS: true,

		// the magic
		responsive: [{

		  breakpoint: 1024,
		  settings: {
		    slidesToShow: 3,
		    infinite: true
		  }

		}, {

		  breakpoint: 600,
		  settings: {
		    slidesToShow: 2,
		    dots: true
		  }

		}, {

		  breakpoint: 300,
		  settings: "unslick" // destroys slick

		}]
	});

	// hide_preloader
	$('#preloader').hide();
});