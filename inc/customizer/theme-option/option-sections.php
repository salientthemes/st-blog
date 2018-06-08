<?php
global$st_blog_sections;

$st_blog_sections['st-blog-back-all-theme-setting'] = array(
    'priority'       => 80,
    'title'          => esc_html__( 'Themes Opions', 'st-blog' ),
    'panel'          => 'st-blog-homepage-panel'
);

// back-to-top-options
require get_template_directory() .'/inc/customizer/theme-option/back-to-top.php';

// breadcrumb
require get_template_directory() .'/inc/customizer/theme-option/breadcrumb.php';

// layout

require get_template_directory() .'/inc/customizer/theme-option/layout-options.php';

