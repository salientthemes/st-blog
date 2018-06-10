
+(function($){
	function st_blog_head_search_form_position() {
		// position search form again - placed in three place in this js
		$('.st-blog-head-search').css({ 'top': $('.st-blog-header-wrap-nav').height() + 'px' });	
	}

	function search_icon_alignment() {
		/*var break_md = 991;

		if($(window).width() > break_md) {
			if($('body').hasClass('big-logo big-logo-enable')) {
				$('.st-blog-head-search-toggler').css({'padding-top': $('.big-logo .st-blog-logo-manage').outerHeight() + 'px'});
			}
			else {
				$('.st-blog-head-search-toggler').css({'padding-top': '10px'});
			}
		}
		else {
			$('.st-blog-head-search-toggler').css({'padding-top': '10px'});
		}*/
	}

	function alignment_and_padding() {
		// page padding again
		$('#page.site').css({ 'padding-top': $('.st-blog-header-wrap-nav').height() + 'px' });	

		// search icon padding
		search_icon_alignment();
	}

	$(window).resize(function() {
		// position search form - placed in two place
		st_blog_head_search_form_position();

		// page margin again
		alignment_and_padding();
	});

	$(window).load(function() {
		// fixed header
		$('body').addClass('fixed-header box-layout big-logo big-logo-enable');

		// position search form
		st_blog_head_search_form_position();

		// page margin again
		alignment_and_padding();

		// mr mobile menu
		$('#site-navigation').mrMobileMenu ();

		// search toggle
		$('.st-blog-head-search-toggler').click(function() { 
			// console.log('clicked');
			$('body').toggleClass('head-search-active');

			// focus search input
			if($('body').hasClass('head-search-active')) {
				$('header.site-header .st-blog-head-search input.search-field').focus();
			}
		});

		// scroll top
		$(window).scroll(function() { 
			if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
				// scrolled down
		        // document.getElementById("st-blog-scroll-top").style.display = "block";
		        $("body").addClass('scrolled-down');

		        if($('body').hasClass('big-logo')) {
		        	$("body").removeClass('big-logo-enable');
		        	$("body").addClass('big-logo-disable');//and hide logo on scroll
					
					// position search form
					st_blog_head_search_form_position();	
					search_icon_alignment();        	
		        }
		    } else {
		        // document.getElementById("st-blog-scroll-top").style.display = "none";
		        $("body").removeClass('scrolled-down');

		        if($('body').hasClass('big-logo')) {
		        	$("body").addClass('big-logo-enable');//don't want to add big-logo on default scroll
		        	$("body").removeClass('big-logo-disable');//and show logo
					
					// position search form
					st_blog_head_search_form_position();	        	
					search_icon_alignment();
		        }
		    } 
		});

		$('#st-blog-scroll-top').click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
		});

		// slick_init
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
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,
		});

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
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
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

		$(".st-blog-instafeed-slider").slick({
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
			prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
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