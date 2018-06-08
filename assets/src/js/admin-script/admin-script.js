jQuery(window).load(function() {
	// on window load
	st_blog_feature_setting_show_hide( jQuery('#customize-control-salient_customizer_options-st-blog-select-post-form select').val() );

	// on change
	jQuery('#customize-control-salient_customizer_options-st-blog-select-post-form select').on('change', function() {
		st_blog_feature_setting_show_hide(this.value);		
	});
});

function st_blog_feature_setting_show_hide(value) {
	if(value == 'from-post') {
		jQuery('#sub-accordion-section-st-blog-feature-setting').addClass('from-post-selected');
		jQuery('#sub-accordion-section-st-blog-feature-setting').removeClass('from-category-selected');	
	}
	else {
		jQuery('#sub-accordion-section-st-blog-feature-setting').addClass('from-category-selected');	
		jQuery('#sub-accordion-section-st-blog-feature-setting').removeClass('from-post-selected');
	}
}