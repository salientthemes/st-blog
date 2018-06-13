<?php
global$st_blog_panels;

// $st_blog_panels['st-blog-all-themes-panel'] = array(
//     'priority'       => 40,
//     'title'          => esc_html__( 'Themes Opions', 'st-blog' ),
//     // 'panel'          => 'st-blog-homepage-panel'
// );


// back-to-top-options
require trailingslashit( get_template_directory() ) .'/inc/customizer/theme-option/back-to-top.php';

// breadcrumb
require trailingslashit( get_template_directory() ) .'/inc/customizer/theme-option/breadcrumb.php';

// layout

require trailingslashit( get_template_directory() ) .'/inc/customizer/theme-option/layout-options.php';

