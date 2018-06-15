
function st_blog_head_search_form_position() {
	// position search form again - placed in three place in this js
	jQuery('.st-blog-head-search').css({ 'top': jQuery('.st-blog-header-wrap-nav').height() + 'px' });	
}

function alignment_and_padding() {
	jQuery('header.site-header').height( jQuery('.st-blog-header-wrap-nav').height() );

	// page padding again
	if(jQuery('body').hasClass('logo-left') || jQuery('body').hasClass('logo-right'))
		jQuery('#page.site').css({ 'padding-top': jQuery('.st-blog-header-wrap-nav').height() + 'px' });	
	else if( jQuery('body').hasClass('logo-center big-logo-disable') )
		jQuery('#page.site').css({ 'padding-top': jQuery('.st-blog-header-wrap-nav').height() + 'px' });
	else if( jQuery('body').hasClass('logo-center big-logo-enable') )
		jQuery('#page.site').css({ 'padding-top': 0 });

	
}

jQuery(window).resize(function() {
	// position search form - placed in two place
	st_blog_head_search_form_position();

	// page margin again
	alignment_and_padding();
});

jQuery(window).load(function() {
	// fixed header
	jQuery('body').addClass('fixed-header box-layout big-logo-enable');

	// position search form
	st_blog_head_search_form_position();

	// page margin again
	alignment_and_padding();

	// mr mobile menu
	jQuery('#site-navigation').mrMobileMenu ();

	// search toggle
	jQuery('.st-blog-head-search-toggler').click(function() { 
		// console.log('clicked');
		jQuery('body').toggleClass('head-search-active');

		// focus search input
		if(jQuery('body').hasClass('head-search-active')) {
			jQuery('header.site-header .st-blog-head-search input.search-field').focus();
		}
	});

	// scroll top
	var navbar = document.getElementById("big-logo-site-nav");
	var sticky = navbar.offsetTop;
	
	jQuery(window).scroll(function() { 
		// for logo-center only

		if (window.pageYOffset >= sticky) {
			// navbar.classList.add("sticky");
		} else {
			// navbar.classList.remove("sticky");
		}
		console.log(window.pageYOffset + '-' + sticky);

		// if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {4
		if (window.pageYOffset >= sticky) {
			// scrolled down
	        // document.getElementById("st-blog-scroll-top").style.display = "block";
	        jQuery("body").addClass('scrolled-down');

	        if(jQuery('body').hasClass('logo-center')) {
	        	jQuery("body").removeClass('big-logo-enable');
	        	jQuery("body").addClass('big-logo-disable');//and hide logo on scroll
				
				// position search form
				st_blog_head_search_form_position();	
				        	
	        }
	    } else {
	        // document.getElementById("st-blog-scroll-top").style.display = "none";
	        jQuery("body").removeClass('scrolled-down');

	        if(jQuery('body').hasClass('logo-center')) {
	        	jQuery("body").addClass('big-logo-enable');//don't want to add big-logo on default scroll
	        	jQuery("body").removeClass('big-logo-disable');//and show logo
				
				// position search form
				st_blog_head_search_form_position();	        	
				
	        }
	    } 
	});

	jQuery('#st-blog-scroll-top').click(function() {
		jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	});

	// slick_init
	var slick_ltr, slick_rtl;

	var slick_ltr = false;//ltr, rtl both works in false

	if(jQuery('body').hasClass('rtl')) {
		slick_rtl = true;//rtl works in true
	} else {
		slick_rtl = false;//ltr works in false
	}
	
	// slider Jqury
	var SliderSpeed  	= customzier_values['st-blog-slider-time-select'];
	var SliderAutoPlay  = customzier_values['st-blog-enable-auto-play'];
	var SliderArrow		= customzier_values['st-blog-enable-arrow'];
	var Sliderpager		= customzier_values['st-blog-enable-pager'];

	jQuery(".st-blog-banner-slider").slick({
		// normal options...
		arrows: ( SliderArrow == 1) ? true  : false ,
		autoplay: ( SliderAutoPlay == 1 ) ? true : false,
		autoplaySpeed: SliderSpeed,
		draggable: true,
		dots: ( Sliderpager == 1) ? true  : false ,
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

	jQuery(".st-blog-featured-slider").slick({
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

	jQuery(".st-blog-full-width-widget .st-blog-instafeed-slider").slick({
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
	jQuery('#preloader').hide();
});