function st_blog_head_search_form_position() {
	// position search form again - placed in three place in this js
	jQuery('.st-blog-head-search').css({ 'top': jQuery('.st-blog-header-wrap-nav').height() + 'px' });	
}

function search_icon_alignment() {
	/*var break_md = 991;

	if(jQuery(window).width() > break_md) {
		if(jQuery('body').hasClass('big-logo big-logo-enable')) {
			jQuery('.st-blog-head-search-toggler').css({'padding-top': jQuery('.big-logo .st-blog-logo-manage').outerHeight() + 'px'});
		}
		else {
			jQuery('.st-blog-head-search-toggler').css({'padding-top': '10px'});
		}
	}
	else {
		jQuery('.st-blog-head-search-toggler').css({'padding-top': '10px'});
	}*/
}

function alignment_and_padding() {
	// page padding again
	jQuery('#page.site').css({ 'padding-top': jQuery('.st-blog-header-wrap-nav').height() + 'px' });	

	// search icon padding
	search_icon_alignment();
}

jQuery(window).resize(function() {
	// position search form - placed in two place
	st_blog_head_search_form_position();

	// page margin again
	alignment_and_padding();
});

jQuery(window).load(function() {
	// fixed header
	jQuery('body').addClass('fixed-header box-layout big-logo big-logo-enable');

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
	jQuery(window).scroll(function() { 
		if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
			// scrolled down
	        // document.getElementById("st-blog-scroll-top").style.display = "block";
	        jQuery("body").addClass('scrolled-down');

	        if(jQuery('body').hasClass('big-logo')) {
	        	jQuery("body").removeClass('big-logo-enable');
	        	jQuery("body").addClass('big-logo-disable');//and hide logo on scroll
				
				// position search form
				st_blog_head_search_form_position();	
				search_icon_alignment();        	
	        }
	    } else {
	        // document.getElementById("st-blog-scroll-top").style.display = "none";
	        jQuery("body").removeClass('scrolled-down');

	        if(jQuery('body').hasClass('big-logo')) {
	        	jQuery("body").addClass('big-logo-enable');//don't want to add big-logo on default scroll
	        	jQuery("body").removeClass('big-logo-disable');//and show logo
				
				// position search form
				st_blog_head_search_form_position();	        	
				search_icon_alignment();
	        }
	    } 
	});

	jQuery('#st-blog-scroll-top').click(function() {
		jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	});

	// slick_init
	jQuery(".st-blog-banner-slider").slick({
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