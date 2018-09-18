<?php
global $st_blog_panels;

// panel for main home page 
$st_blog_panels['st-blog-homepage-panel']  = array(
	'title'			=> esc_html__('Theme Options','st-blog'),
	'priority'		=> 30	
);

// header and footer
$st_blog_header_footer_path = st_blog_file_directory('inc/customizer/Header-Footer/header-footer-options.php');
require $st_blog_header_footer_path;


// Post display 
$st_blog_post_display_path = st_blog_file_directory('inc/customizer/post-display/options.php');
require $st_blog_post_display_path;

// social media 
$st_blog_footer_social_media_path = st_blog_file_directory('inc/customizer/Footer-social-media/options.php');
require $st_blog_footer_social_media_path;

// color
$st_blog_color_path = st_blog_file_directory('inc/customizer/color/color-section.php');
require $st_blog_color_path;

// fonts
$st_blog_font_path = st_blog_file_directory('inc/customizer/font/font-section.php');
require $st_blog_font_path;

// gallery option
$st_blog_gallery_path = st_blog_file_directory('inc/customizer/gallery/options.php');
require $st_blog_gallery_path;






