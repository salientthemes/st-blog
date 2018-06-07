<?php 

global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repeated_settings_controls;
global $st_blog_customizer_defaults;

$st_blog_customizer_defaults['st-blog-select-post-form']            = 'from-category';
$st_blog_customizer_defaults['st-blog-select-post-from-category']   = 1;
$st_blog_customizer_defaults['st-blog-select-post-from-page']       = 0;

// slider setting option's
$st_blog_sections['st-blog-feature-setting'] = array(
    'title'     => esc_html__('Feature Slider setting','st-blog'),
    'panel'     => 'st_blog_feature_slider_panel' ,
    'priority'  => 200                 

);

// slider post selection
$st_blog_settings_controls['st-blog-select-post-form'] = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-select-post-form']
    ),
    'control' => array(
        'label'         => esc_html__('Select Slider Post Type','st-blog'),
        'description'           =>  esc_html__( 'After selecting one of the option, please go back and go to particular section to add', 'st-blog' ),
        'section'       => 'st-blog-feature-setting',
        'type'          => 'select',
        'choices' => array(
            'from-category'     => esc_html__('from-category','st-blog'),
            'from-post'         => esc_html__('From-Page','st-blog')
        ),
        'priority'              => 30,
        'active_callback'       => ''
    ),  
);

// slider post from category
$st_blog_settings_controls['st-blog-select-post-from-category']  = array(
    'setting' => array(
        'default'       => $st_blog_customizer_defaults['st-blog-select-post-from-category']
    ),
    'control' => array(
        'label'             => esc_html__('Select a Category For Feature Slider','st-blog'),
        'description'       => esc_html__( 'This option only work when you have selected "Category" in "Slider Post Type". Recommended featured image size 1360 * 530 for posts under selected category', 'st-blog' ),
        'section'           => 'st-blog-feature-setting' ,
        'type'              => 'category_dropdown',
        'priority'          => 40,
        'active_callback'   => ''          
    ), 
                 
);

// slider post from page
$st_blog_repeated_settings_controls['st-blog-select-post-from-page']  =  array(
    'repeated'  => 7,
    'feature-slider-page-id' => array(
        'setting' => array(
            'default'   => $st_blog_customizer_defaults['st-blog-select-post-from-page'] 
        ),
        'control' => array(
            'label'             => esc_html__('Select a Page Fro Feature Slider %s','st-blog'),
            'section'           => 'st-blog-feature-setting',
            'type'              => 'dropdown-pages',
            'priority'          => 50,
            'active_callback'   => ''
        )
    ),
    'st-blog-fs-pages-divider' => array(
        'control' => array(
            'section'               => 'st-blog-feature-setting',
            'type'                  => 'message',
            'priority'              => 50,
            'description'           => '<br /><hr />'
        )
    )      
);
