jQuery(window).load(function() {
	// fixed header
	jQuery('body').addClass('fixed-header'); 

	// search toggle
	jQuery('.st-blog-head-search-toggler').click(function() { 
		// console.log('clicked');
		jQuery('body').toggleClass('head-search-active'); 
	});
});
