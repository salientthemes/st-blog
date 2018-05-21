jQuery(window).load(function() {
	// fixed header
	jQuery('body').addClass('fixed-header'); 

	// search toggle
	jQuery('.st-blog-head-search-toggler').click(function() { 
		// console.log('clicked');
		jQuery('body').toggleClass('head-search-active'); 
	});

	slick_init();
});

function slick_init() {
	jQuery(".slick-slider").slick({
	  // normal options...
	  autoplay: true,
	  autoplaySpeed: 4000,
	  infinite: true,
	  pauseOnFocus: false,
	  pauseOnHover: false,
	  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
	  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
	});
}