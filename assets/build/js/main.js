jQuery(window).load(function() {
	// fixed header
	jQuery('body').addClass('fixed-header'); 

	jQuery('.st-blog-head-search-toggler').click(function() { 
		// console.log('clicked');
		jQuery('body').toggleClass('head-search-active'); 
	});

});
