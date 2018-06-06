<?php
global$st_blog_panels;
/*creating panel for theme settings*/
$st_blog_panels['st-blog-theme-options'] =
    array(
        'title'          => esc_html__( 'Theme Options', 'st-blog' ),
        'priority'       => 235
    );

/*footer options */
// require get_template_directory().'/inc/customizer/theme-option/footer.php';

/*layout options */
require get_template_directory().'/inc/customizer/theme-option/layout-options.php';

/*breadcrumb options */
require get_template_directory().'/inc/customizer/theme-option/breadcrumb.php';

/*back to top options */
require get_template_directory().'/inc/customizer/theme-option/back-to-top.php';