$(document).ready(function() {
	$('#customize-control-salient_customizer_options-st-blog-select-post-form select').on('change', function() {
		if(this.value == 'from-post')
			$('#sub-accordion-section-st-blog-feature-setting').addClass('from-post-selected');
		else 
			$('#sub-accordion-section-st-blog-feature-setting').removeClass('from-post-selected');	
	});
});