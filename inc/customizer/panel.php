<?php
global $st_blog_panels;

// panel for main home page 
$st_blog_panels['st-blog-homepage-panel']  = array(
	'title'			=> esc_html__('Theme Options','st-blog'),
	'priority'		=> 30	
);

// header and footer
require trailingslashit(get_template_directory() ) .'/inc/customizer/Header-Footer/header-footer-options.php';

// main feature slider
// require get_template_directory(). '/inc/customizer/Feature-slider/slider-options.php';
// require get_template_directory(). '/inc/customizer/Feature-slider/slider-setting.php';

// for feature-content post
// require get_template_directory() .'/inc/customizer/Feature-Trending-Post/feature-content-options.php';

// Post display
require trailingslashit(get_template_directory() ) .  '/inc/customizer/post-display/options.php'; 

// social media 
require trailingslashit(get_template_directory() ) .'/inc/customizer/Footer-social-media/options.php';

// color
require trailingslashit(get_template_directory() ) .'/inc/customizer/color/color-section.php';

// fonts
require trailingslashit(get_template_directory() ) .'/inc/customizer/font/font-section.php';

// theme-options
// require get_template_directory() .'/inc/customizer/theme-option/option-sections.php';


// back-to-top-options
require trailingslashit(get_template_directory() ) .'/inc/customizer/theme-option/back-to-top.php';

// breadcrumb
require trailingslashit(get_template_directory() ) .'/inc/customizer/theme-option/breadcrumb.php';

// layout

require get_template_directory() .'/inc/customizer/theme-option/layout-options.php';





