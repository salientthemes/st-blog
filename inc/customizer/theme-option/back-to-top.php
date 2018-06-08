<?php
global$st_blog_sections;
global$st_blog_settings_controls;
global$st_blog_repeated_settings_controls;
global$st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['st-blog-enable-back-to-top'] = 1;


$st_blog_settings_controls['st-blog-enable-back-to-top'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-enable-back-to-top'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Enable Back To Top', 'st-blog' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'checkbox',
        'priority'              => 10,
    )
);