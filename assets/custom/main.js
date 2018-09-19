+(function($) {
	function st_blog_head_search_form_position() {
		// position search form again - placed in three place in this js
		$('.st-blog-head-search').css({ 'top': $('.st-blog-header-wrap-nav').height() + 'px' });	
	}

	function alignment_and_padding() {
		// $('header.site-header').height( $('.st-blog-header-wrap-nav').height() );
		
		if($(window).width() >= 992) {//601
			// page padding again
			$('#page.site').css({ 'padding-top': $('.st-blog-header-wrap-nav').height() + 'px' });	
		}
		else {
			$('#page.site').css({ 'padding-top': '0px' });	
		}


		if($(window).width() >= 992) {
			if($('body').hasClass('logo-left') || $('body').hasClass('logo-right')) {
				// for nav - always vertically center
				$('nav#site-navigation ul#menu > li > a, nav#site-navigation ul.nav-menu > li > a, nav#site-navigation ul.menu > li > a').css({ 'line-height': $('.st-blog-header-wrap-nav').height()-50 + 'px' });
			}
		}		
	}

	function head_search() {
		if( $('body').hasClass('head-search-active') ) {
			$('body').removeClass('head-search-active');
		}
		else {
			$('body').addClass('head-search-active');
		}
	}

	function masonry() {
		var window_masonry;
		window_masonry = 992;
		if($('body').hasClass('salient-no-sidebar')) {
			window_masonry = 768;
		}
		if($(window).width() >= window_masonry) {
			$('.st-blog-masonry').masonry({
			  // set itemSelector so .grid-sizer is not used in layout
			  itemSelector: '.st-blog-item',
			  // use element for option
			  columnWidth: '.st-blog-grid-sizer',
			  percentPosition: true
			});
		}
	}

	$(window).resize(function() {
		// position search form - placed in two place
		st_blog_head_search_form_position();

		// masonry
		masonry();

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
		// create a mask
		$('body').append('<div class="st-blog-search-mask"></div>');

		$('.st-blog-head-search-toggler').click(function() { 
			$('body').toggleClass('head-search-active');

			// focus search input
			if($('body').hasClass('head-search-active')) {
				$('header.site-header .st-blog-head-search input.search-field').focus();
			}
		});

		$('body .st-blog-search-mask').click(function() { 
			$('.st-blog-head-search-toggler').trigger('click');
		});



		$(window).scroll(function() { 
			var scrollTopPosition    = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;

			if (scrollTopPosition > 200) {//200
		        $('#st-blog-scroll-top').css({'bottom': '40px'});
		        $('body').addClass('small-header');
		        st_blog_head_search_form_position();
		    } else {
		        $('#st-blog-scroll-top').css({'bottom': '-40px'});
		        $('body').removeClass('small-header');
		        st_blog_head_search_form_position();
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

			  breakpoint: 767,
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
		
		$('#st-blog-banner').css({'opacity': 1});

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

		// free: gallery
		$(".st-blog-gallery-slider").slick({
			// normal options...
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: false,
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

		// photobox for gallery
		$( '#st-blog-gallery' ).photobox( '.st-blog-gallery-image a', {
			time:0,
			zoomable:false
			//single: true
	    });



	    // hide header on scroll down, show on scroll up
		// Hide Header on on scroll down
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('header').outerHeight();

		$(window).scroll(function(event){
		    didScroll = true;
		});

		setInterval(function() {
		    if (didScroll) {
		        hasScrolled();
		        didScroll = false;
		    }
		}, 250);

		function hasScrolled() {
		    var st = $(this).scrollTop();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta)
		        return;
		    
		    // If they scrolled down and are past the navbar, add class .nav-up.
		    // This is necessary so you never see what is "behind" the navbar.
		    if (st > lastScrollTop && st > navbarHeight){
		        // Scroll Down
		        $('header').removeClass('nav-down').addClass('nav-up');
		    } else {
		        // Scroll Up
		        if(st + $(window).height() < $(document).height()) {
		            $('header').removeClass('nav-up').addClass('nav-down');
		        }
		    }
		    
		    lastScrollTop = st;
		}

		// masonry
		setTimeout(function() {
			masonry();
		}, 500);
		
		$('#preloader').hide();

	});
})(jQuery);