+(function($) {
	function st_blog_head_search_form_position() {
		// position search form again - placed in three place in this js
		$('.st-blog-head-search').css({ 'top': $('.st-blog-header-wrap-nav').height() + 'px' });	
	}

	function alignment_and_padding() {
		$('header.site-header').height( $('.st-blog-header-wrap-nav').height() );

		// page padding again
		if($('body').hasClass('logo-left') || $('body').hasClass('logo-right')) {
			$('#page.site').css({ 'padding-top': $('.st-blog-header-wrap-nav').height() + 'px' });	

			// for nav - always vertically center
			$('nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a').css({ 'line-height': $('.st-blog-header-wrap-nav').height()-50 + 'px' });
		}
		else if( $('body').hasClass('logo-center big-logo-disable') ) {
			$('#page.site').css({ 'padding-top': $('.st-blog-header-wrap-nav').height() + 'px' });
		}
		else if( $('body').hasClass('logo-center big-logo-enable') )
			$('#page.site').css({ 'padding-top': 0 });
		
	}

	$(window).resize(function() {
		// position search form - placed in two place
		st_blog_head_search_form_position();

		// page margin again
		alignment_and_padding();
	});

	$(window).load(function() {
		// fixed header
		$('body').addClass('fixed-header box-layout big-logo-enable');

		// position search form
		st_blog_head_search_form_position();

		// page margin again
		alignment_and_padding();

		$('#site-navigation').stMobileMenu ();

		// search toggle
		$('.st-blog-head-search-toggler').click(function() { 
			$('body').toggleClass('head-search-active');

			// focus search input
			if($('body').hasClass('head-search-active')) {
				$('header.site-header .st-blog-head-search input.search-field').focus();
			}
		});

		// scroll top
		var navbar = document.getElementById("big-logo-site-nav");
		var sticky = navbar.offsetTop;
		
		$(window).scroll(function() { 
			// for logo-center only

			if (window.pageYOffset >= sticky) {
				// navbar.classList.add("sticky");
			} else {
				// navbar.classList.remove("sticky");
			}

			// if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {4
			if (window.pageYOffset >= sticky) {
				// scrolled down
		        // document.getElementById("st-blog-scroll-top").style.display = "block";
		        $("body").addClass('scrolled-down');

		        if($('body').hasClass('logo-center')) {
		        	$("body").removeClass('big-logo-enable');
		        	$("body").addClass('big-logo-disable');//and hide logo on scroll
					
					// position search form
					st_blog_head_search_form_position();	
					        	
		        }
		    } else {
		        // document.getElementById("st-blog-scroll-top").style.display = "none";
		        $("body").removeClass('scrolled-down');

		        if($('body').hasClass('logo-center')) {
		        	$("body").addClass('big-logo-enable');//don't want to add big-logo on default scroll
		        	$("body").removeClass('big-logo-disable');//and show logo
					
					// position search form
					st_blog_head_search_form_position();	        	
					
		        }
		    } 
		});

		$('#st-blog-scroll-top').click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
		});

		// slick_init
		var slick_ltr, slick_rtl;

		var slick_ltr = false;//ltr, rtl both works in false

		if($('body').hasClass('rtl')) {
			slick_rtl = true;//rtl works in true
		} else {
			slick_rtl = false;//ltr works in false
		}
		
		// slider Jqury
		// var SliderSpeed  	= customzier_values['st-blog-slider-time-select'];
		// var SliderAutoPlay  = customzier_values['st-blog-enable-auto-play'];
		// var SliderArrow		= customzier_values['st-blog-enable-arrow'];
		// var Sliderpager		= customzier_values['st-blog-enable-pager'];

		$(".st-blog-banner-slider").slick({
			// normal options...
			arrows: true,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: true,
			fade: true,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,
		});

		// var ContentSliderSpeed  	= customzier_values['st-blog-feature-content-slider-time'];
		// var ContentSliderAutoPlay   = customzier_values['st-blog-feature-content-slider-autoplay-enable'];
		

		$(".st-blog-featured-slider").slick({
			// normal options...
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: true,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 3,
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

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			/*{

			  breakpoint: 300,
			  settings: "unslick" // destroys slick

			}*/
			]
		});

		$(".st-blog-full-width-widget .st-blog-instafeed-slider").slick({
			// normal options...
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 8,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 6,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 4,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			/*{

			  breakpoint: 300,
			  settings: "unslick" // destroys slick

			}*/
			]
		});

		// hide_preloader
		$('#preloader').hide();
	});
})(jQuery);