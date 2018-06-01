<?php
global$st_blog_sections;
global$st_blog_settings_controls;
global$st_blog_repeated_settings_controls;
global$st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['st-blog-footer-sidebar-number'] = 4;
$st_blog_customizer_defaults['st-blog-copyright-text'] = esc_html__('Copyright &copy; All right reserved.','st-blog');
$st_blog_customizer_defaults['st-blog-enable-theme-name'] = 1;

$st_blog_sections['st-blog-footer-options'] = array(
    'priority'       => 15,
    'title'          => esc_html__( 'Footer Options', 'st-blog' ),
    'panel'          => 'st-blog-theme-options'
);


$st_blog_settings_controls['st-blog-footer-sidebar-number'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-footer-sidebar-number'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Number of Sidebars In Footer Area', 'st-blog' ),
        'section'               => 'st-blog-footer-options',
        'type'                  => 'select',
        'choices'               => array(
            0 => esc_html__( 'Disable footer sidebar area', 'st-blog' ),
            1 => esc_html__( '1', 'st-blog' ),
            2 => esc_html__( '2', 'st-blog' ),
            3 => esc_html__( '3', 'st-blog' ),
            4 => esc_html__( '4', 'st-blog' )
        ),
        'priority'              => 15,
        'description'           => '',
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-copyright-text'] =
    array(
        'setting' =>  array(
            'default'              =>$st_blog_customizer_defaults['st-blog-copyright-text'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Copyright Text', 'st-blog' ),
            'section'               => 'st-blog-footer-options',
            'type'                  => 'text_html',
            'priority'              => 20,
        )
    );