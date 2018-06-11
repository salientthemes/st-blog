<?php

global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repeated_settings_controls;
global $st_blog_customizer_defaults;

$st_blog_customizer_defaults['st-blog-feature-slider-enable']       = 1;
$st_blog_customizer_defaults['st-blog-number-of-slider']            = 7;
$st_blog_customizer_defaults['st-blog-button text']                 = '';
$st_blog_customizer_defaults['st-blog-slider-time-select']          = 4000;
$st_blog_customizer_defaults['st-blog-enable-button']               = 1;
$st_blog_customizer_defaults['st-blog-enable-arrow']                = 1;
$st_blog_customizer_defaults['st-blog-enable-auto-play']            = 1;

// Feature slider panel
// $st_blog_panels['st-blog-fetaure-slider']  =  array(
//     'title'     => esc_html__('Feature Slider','st-blog');
// );


$st_blog_sections['st-blog-feature-section'] = array(
    'title'     => esc_html__('Home Page Feature Slider ','st-blog'),
    // 'panel'     => 'st-blog-homepage-panel' ,
    'priority'  => 20                 

);

// slider enable disble otions
$st_blog_settings_controls['st-blog-feature-slider-enable'] = array(
    'setting' => array(
        'default'  => $st_blog_customizer_defaults['st-blog-feature-slider-enable']
    ), 
    'control' => array(
        'label'             => esc_html__('Enable/Disable Feature Slider','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'checkbox',
        'priority'          => 10,
        'active_callback'   => ''

    )          
);

// slider number selection
$st_blog_settings_controls['st-blog-number-of-slider'] =  array(
    'setting'   => array(
        'default'   => $st_blog_customizer_defaults['st-blog-number-of-slider']
    ),
    'control' => array(
        'label'             => esc_html__('Select Number of Slider','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'select',
        'choices'           => array(
            1             => esc_html__('1','st-blog'),
            2             => esc_html__('2','st-blog'),
            3             => esc_html__('3','st-blog'),
            4             => esc_html__('4','st-blog'),
            5             => esc_html__('5','st-blog'),
            6             => esc_html__('6','st-blog'),
            7             => esc_html__('7','st-blog'),
        ), 
        'priority'          => 20,
        'active_callback'   => ''

    )  
);

// slider post time
$st_blog_settings_controls['st-blog-slider-time-select']  = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-slider-time-select']
    ),
    'control' => array(
        'label'             => esc_html__('Slider Time','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'text',
        'priority'          => 70,
        'active_callback'   => ''    
    )  
);

// slider button text
$st_blog_settings_controls['st-blog-button text']  = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-button text']
    ),
    'control' => array(
        'label'             => esc_html__('Slider Button Text','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'text',
        'priority'          => 70,
        'active_callback'   => ''    
    )  
);

// slider button enable
$st_blog_settings_controls['st-blog-enable-button']  = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-enable-button']
    ),
    'control' => array(
        'label'             => esc_html__('Enable/Disable Slider Button','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'checkbox',
        'priority'          => 80,
        'active_callback'   => ''    
    )  
);

// slider arrow enable
$st_blog_settings_controls['st-blog-enable-arrow']  = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-enable-arrow']
    ),
    'control' => array(
        'label'             => esc_html__('Enable/Disable Slider Arrow','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'checkbox',
        'priority'          => 90,
        'active_callback'   => ''    
    )  
);

// slider arrow enable
$st_blog_settings_controls['st-blog-enable-auto-play']  = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-enable-auto-play']
    ),
    'control' => array(
        'label'             => esc_html__('Enable/Disable Slider AutoPlay','st-blog'),
        'section'           => 'st-blog-feature-section',
        'type'              => 'checkbox',
        'priority'          => 90,
        'active_callback'   => ''    
    )  
);


