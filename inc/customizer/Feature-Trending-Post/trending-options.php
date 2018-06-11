<?php

global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repeated_settings_controls;
global $st_blog_customizer_defaults;

$st_blog_customizer_defaults['st-blog-trending-enbale'] 				= 1;
$st_blog_customizer_defaults['st-blog-trending-main-title-text'] 		= '';
$st_blog_customizer_defaults['st-blog-trending-single-number-of-words'] = 25;
$st_blog_customizer_defaults['st-blog-trending-number-post']			= 4;
$st_blog_customizer_defaults['st-blog-trending-select-post-from'] 		= 'from-page';
$st_blog_customizer_defaults['st-blog-trending-select-from-page'] 		= '';
$st_blog_customizer_defaults['st-blog-trending-select-from-category'] 	= '';
$st_blog_customizer_defaults['st-blog-trending-button-text']  			= '';
$st_blog_customizer_defaults['st-blog-trending-button-enable']			= 1;
$st_blog_customizer_defaults['st-blog-trending-slider-autoplay-enable']	= 1;
$st_blog_customizer_defaults['st-blog-trending-slider-time']			= 4000;
$st_blog_customizer_defaults['st-blog-trending-image-enable']			= 1;



// create a section for trending
$st_blog_sections['st-blog-trending-section'] = array(
	'title'		=> esc_html__('All Trending Post Options','st-blog'),
	// 'panel'		=> 'st-blog-homepage-panel',
	'priority'	=> 20
);

// enable Options for Trending news
$st_blog_settings_controls['st-blog-trending-enbale'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-trending-enbale']
	),
	'control'=> array(
		'label'				=> esc_html__('Enable/Disable Trending Post','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

// trendig Title text
$st_blog_settings_controls['st-blog-trending-main-title-text'] = array(
	'setting' => array(
		'default'		=> $st_blog_customizer_defaults['st-blog-trending-main-title-text']
	),
	'control' => array(
		'label'				=> esc_html__( 'Trending Title text','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

// select single number of word's
$st_blog_settings_controls['st-blog-trending-single-number-of-words'] = array(
	'setting' => array(
		'default'		=> $st_blog_customizer_defaults['st-blog-trending-single-number-of-words'] 
	),
	'control' => array(
		'label'				=> esc_html__('Select number of words for content','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'number',
		'priority'			=> 30,
		'active_callback'	=> '' 
	)	
);

// trending post selection
$st_blog_settings_controls['st-blog-trending-number-post'] =  array(
    'setting'   => array(
        'default'   => $st_blog_customizer_defaults['st-blog-trending-number-post']
    ),
    'control' => array(
        'label'             => esc_html__('Select Number Of Trending Post','st-blog'),
        'section'           => 'st-blog-trending-section',
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

// select trending  post type
$st_blog_settings_controls['st-blog-trending-select-post-from'] = array(
	'setting' => array(
		'default'			=> $st_blog_customizer_defaults['st-blog-trending-select-post-from'] 
	),
	'control' => array(
		'label'				=> esc_html__('Select Post type for trending','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'select',
		'choices' => array(
			'from-category'	=> esc_html__('From-Category','st-blog'),
			'from-page'		=> esc_html__('From-page','st-blog'),	
		),
		'priority'			=> 40,
		'active_callback'	=> ''
	)	 	
);

// select  post form category
$st_blog_settings_controls['st-blog-trending-select-from-category'] = array(
	'setting' => array(
		'default'				=> $st_blog_customizer_defaults['st-blog-trending-select-from-category']	
	),
	'control' => array(
		'label'					=> esc_html__('Select category for trending','st-blog'),
		'section'				=> 'st-blog-trending-section',
		'type'					=> 'category_dropdown',
		'priority'				=> 50,
		'active_callback'		=> ''
	)
);

// select post from page
$st_blog_repeated_settings_controls['st-blog-trending-select-from-page'] = array(
	'repeated'	=> 7,
	'trending-page-id' => array(
		'setting' => array(
			'default'			=> $st_blog_customizer_defaults['st-blog-trending-select-from-page']
		),
		'control' => array(
			'label'				=> esc_html__('Select page for trending %s','st-blog'),
			'section'			=> 'st-blog-trending-section',
			'type'				=> 'dropdown-pages',
			'priority'			=> 60,
			'active_callback'	=> ''
		),			
	)		
);

// button text 
$st_blog_settings_controls['st-blog-trending-button-text'] = array(
	'setting' => array(
		'default'				=> 	$st_blog_customizer_defaults['st-blog-trending-button-text'] 	
	),
	'control'  => array(
		'label'					=> esc_html__('Button Text','st-blog'),
		'section'				=> 'st-blog-trending-section',
		'type'					=> 'text',
		'priority'				=> 70,
		'active_callback'		=> ''
	)		
);

// button enable
$st_blog_settings_controls['st-blog-trending-button-enable'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-trending-button-enable']
	),
	'control'=> array(
		'label'				=> esc_html__('Enable/Disable Trending Button','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'checkbox',
		'priority'			=> 80,
		'active_callback'	=> ''
	)
);

// enable AutoPlay
$st_blog_settings_controls['st-blog-trending-slider-autoplay-enable'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-trending-slider-autoplay-enable']
	),
	'control'=> array(
		'label'				=> esc_html__('Enable/Disable Trending AutoPlay','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'checkbox',
		'priority'			=> 90,
		'active_callback'	=> ''
	)
);

// slider time
$st_blog_settings_controls['st-blog-trending-slider-time'] = array(
	'setting'	=> array(
		'default'			=> $st_blog_customizer_defaults['st-blog-trending-slider-time']
	),
	'control'=> array(
		'label'				=> esc_html__('Select Slider Time For Trending AutoPlay','st-blog'),
		'section'			=> 'st-blog-trending-section',
		'type'				=> 'text',
		'priority'			=> 100,
		'active_callback'	=> ''
	)
);

