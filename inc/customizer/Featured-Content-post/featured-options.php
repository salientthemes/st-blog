<?php

global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repeated_settings_controls;
global $st_blog_customizer_defaults;

$st_blog_customizer_defaults['st-blog-feature-content-enbale'] 				= 1;
$st_blog_customizer_defaults['st-blog-feature-content-main-title-text'] 		= '';
$st_blog_customizer_defaults['st-blog-feature-content-single-number-of-words'] = 25;
$st_blog_customizer_defaults['st-blog-feature-content-number-post']			= 4;
$st_blog_customizer_defaults['st-blog-feature-content-select-post-from'] 		= 'from-page';
$st_blog_customizer_defaults['st-blog-feature-content-select-from-page'] 		= '';
$st_blog_customizer_defaults['st-blog-feature-content-select-from-category'] 	= '';
$st_blog_customizer_defaults['st-blog-feature-content-button-text']  			= '';
$st_blog_customizer_defaults['st-blog-feature-content-button-enable']			= 1;
$st_blog_customizer_defaults['st-blog-feature-content-slider-autoplay-enable']	= 1;
$st_blog_customizer_defaults['st-blog-feature-content-slider-time']			= 4000;
$st_blog_customizer_defaults['st-blog-feature-content-image-enable']			= 1;



// create a section for Featured Content
$st_blog_sections['st-blog-feature-content-section'] = array(
	'title'		=> esc_html__('Featured Content','st-blog'),
	// 'panel'		=> 'st-blog-homepage-panel',
	'priority'	=> 20
);

// enable Options for Featured Content news
$st_blog_settings_controls['st-blog-feature-content-enbale'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-feature-content-enbale']
	),
	'control'=> array(
		'label'				=> esc_html__('Enable/Disable Featured Content','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

// trendig Title text
$st_blog_settings_controls['st-blog-feature-content-main-title-text'] = array(
	'setting' => array(
		'default'		=> $st_blog_customizer_defaults['st-blog-feature-content-main-title-text']
	),
	'control' => array(
		'label'				=> esc_html__( 'Title Text','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

// select single number of word's
$st_blog_settings_controls['st-blog-feature-content-single-number-of-words'] = array(
	'setting' => array(
		'default'		=> $st_blog_customizer_defaults['st-blog-feature-content-single-number-of-words'] 
	),
	'control' => array(
		'label'				=> esc_html__('Number of words for featured content','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'number',
		'priority'			=> 30,
		'active_callback'	=> '' 
	)	
);

// Featured Content post selection
$st_blog_settings_controls['st-blog-feature-content-number-post'] =  array(
    'setting'   => array(
        'default'   => $st_blog_customizer_defaults['st-blog-feature-content-number-post']
    ),
    'control' => array(
        'label'             => esc_html__('Select number of Post','st-blog'),
        'section'           => 'st-blog-feature-content-section',
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
        'priority'          => 35,
        'active_callback'   => ''

    )  
);

// select Featured Content  post type
$st_blog_settings_controls['st-blog-feature-content-select-post-from'] = array(
	'setting' => array(
		'default'			=> $st_blog_customizer_defaults['st-blog-feature-content-select-post-from'] 
	),
	'control' => array(
		'label'				=> esc_html__('Select Post type for Featured Content','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'select',
		'choices' => array(
			'from-category'	=> esc_html__('Choose From Category','st-blog'),
			'from-page'		=> esc_html__('Choose From Page','st-blog'),	
		),
		'priority'			=> 40,
		'active_callback'	=> ''
	)	 	
);

// select  post form category
$st_blog_settings_controls['st-blog-feature-content-select-from-category'] = array(
	'setting' => array(
		'default'				=> $st_blog_customizer_defaults['st-blog-feature-content-select-from-category']	
	),
	'control' => array(
		'label'					=> esc_html__('Select Category for Featured Content','st-blog'),
		'section'				=> 'st-blog-feature-content-section',
		'type'					=> 'category_dropdown',
		'priority'				=> 50,
		'active_callback'		=> ''
	)
);

// select post from page
$st_blog_repeated_settings_controls['st-blog-feature-content-select-from-page'] = array(
	'repeated'	=> 7,
	'feature-content-page-id' => array(
		'setting' => array(
			'default'			=> $st_blog_customizer_defaults['st-blog-feature-content-select-from-page']
		),
		'control' => array(
			 /* translators: %s: search page */ 
			'label'				=> esc_html__('Select page for Featured Content %s','st-blog'),
			'section'			=> 'st-blog-feature-content-section',
			'type'				=> 'dropdown-pages',
			'priority'			=> 60,
			'active_callback'	=> ''
		),			
	)		
);

// button text 
$st_blog_settings_controls['st-blog-feature-content-button-text'] = array(
	'setting' => array(
		'default'				=> 	$st_blog_customizer_defaults['st-blog-feature-content-button-text'] 	
	),
	'control'  => array(
		'label'					=> esc_html__('Button Text','st-blog'),
		'section'				=> 'st-blog-feature-content-section',
		'type'					=> 'text',
		'priority'				=> 70,
		'active_callback'		=> ''
	)		
);

// button enable
$st_blog_settings_controls['st-blog-feature-content-button-enable'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-feature-content-button-enable']
	),
	'control'=> array(
		'label'				=> esc_html__('Enable/Disable Button','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'checkbox',
		'priority'			=> 80,
		'active_callback'	=> ''
	)
);

// enable AutoPlay
$st_blog_settings_controls['st-blog-feature-content-slider-autoplay-enable'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-feature-content-slider-autoplay-enable']
	),
	'control'=> array(
		'label'				=> esc_html__('Enable/Disable AutoPlay','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'checkbox',
		'priority'			=> 90,
		'active_callback'	=> ''
	)
);

// slider time
$st_blog_settings_controls['st-blog-feature-content-slider-time'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-feature-content-slider-time']
	),
	'control'=> array(
		'label'				=> esc_html__('Select Slider Time For Featured Content AutoPlay','st-blog'),
		'section'			=> 'st-blog-feature-content-section',
		'type'				=> 'text',
		'priority'			=> 100,
		'active_callback'	=> ''
	)
);
