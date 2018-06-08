jQuery(window).load(function() {
	// on window load
	st_blog_feature_setting_show_hide( jQuery('#customize-control-salient_customizer_options-st-blog-select-post-form select').val(), '#sub-accordion-section-st-blog-feature-section' );

	// on change
	jQuery('#customize-control-salient_customizer_options-st-blog-select-post-form select').on('change', function() {
		st_blog_feature_setting_show_hide(this.value, '#sub-accordion-section-st-blog-feature-section');		
	});
});

function st_blog_feature_setting_show_hide(value, parent_id) {
	if(value == 'from-post') {
		jQuery(parent_id).addClass('from-post-selected');
		jQuery(parent_id).removeClass('from-category-selected');	
	}
	else {
		jQuery(parent_id).addClass('from-category-selected');	
		jQuery(parent_id).removeClass('from-post-selected');
	}
}