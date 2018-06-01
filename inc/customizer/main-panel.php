<?php 
global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repetesd_settings_control;
global $st_blog_customizer_defaults;

// create a panel section 
$st_blog_panels['st_blog_home_main_panel'] = 
	array(
		'title'			=> esc_html__('Home/Front Page Sections','st-blog'),
		'priority'		=> 200
	);


//connect for tincker section
// require get_template_directory(). '/inc/customizer/Feature-slider/slider-setting.php'; 

//connect for tincker section
require get_template_directory(). '/inc/customizer/home-latest-news-blog/setting-options.php';


