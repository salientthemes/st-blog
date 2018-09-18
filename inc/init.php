<?php
/**
 * salient themes init file
 *
 * @package salient themes
 * @subpackage st-blog
 * @since st-blog 1.0.0
 */

/**
 * Customizer additions.
 */
$st_blog_customizer_path = st_blog_file_directory('inc/customizer/customizer.php');
require $st_blog_customizer_path;

/**
*sidebar widget.
*/
$st_blog_sidebar_widget_path = st_blog_file_directory('inc/sidebar-widget-init.php');
require $st_blog_sidebar_widget_path;

/**
Layout additions
 */
$st_blog_layout_meta_path = st_blog_file_directory('inc/post-meta/layout-meta.php');
require $st_blog_layout_meta_path;


$st_blog_excerpt_path = st_blog_file_directory('inc/hooks/excerpt.php');
require $st_blog_excerpt_path;

$st_blog_words_count_path = st_blog_file_directory('inc/function/words-count.php');
require $st_blog_words_count_path;


$st_blog_single_image_align_path = st_blog_file_directory('inc/function/single-image-align.php');
require $st_blog_single_image_align_path;


$st_blog_header_logo_path = st_blog_file_directory('inc/function/header-logo.php');
require $st_blog_header_logo_path;


$st_blog_header_path = st_blog_file_directory('inc/hooks/header.php');
require $st_blog_header_path;


$st_blog_footer_path = st_blog_file_directory('inc/hooks/footer.php');
require $st_blog_footer_path;


$st_blog_feature_slider_path = st_blog_file_directory('inc/hooks/feature-slider.php');
require $st_blog_feature_slider_path;


$st_blog_feature_content_post_path = st_blog_file_directory('inc/hooks/feature-content-post.php');
require $st_blog_feature_content_post_path;


$st_blog_full_width_widget_path = st_blog_file_directory('inc/hooks/full-width-widget.php');
require $st_blog_full_width_widget_path;


$st_blog_homepage_social_meadia_path = st_blog_file_directory('inc/hooks/homepage-social-meadia.php');
require $st_blog_homepage_social_meadia_path;


$st_blog_inline_style_path = st_blog_file_directory('inc/hooks/inline-style.php');
require $st_blog_inline_style_path;


$st_blog_image_gallery_path = st_blog_file_directory('inc/hooks/image-gallery.php');
require $st_blog_image_gallery_path;









