<?php

global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repeated_settings_controls;
global $st_blog_customizer_defaults;

$st_blog_customizer_defaults['st-blog-enable-social-media']     = 1;
$st_blog_customizer_defaults['st-blog-social-link']				= '#';
$st_blog_customizer_defaults['st-blog-social-button']			= 'ADD';


$st_blog_panels['st-blog-social-panel'] = array(
	'title'			=> esc_html__('Social Media','st-blog'),
	'priority'		=> 240,
);

$st_blog_sections['st-blog-social-section'] = array(
	'title'			=> esc_html__('All Social Options','st-blog'),
	'panel'			=> 'st-blog-homepage-panel',
	'priority'		=> 50
);


// enable options
$st_blog_settings_controls['st-blog-enable-social-media']   =  array(
	'setting' => array(
		'default'   => 	$st_blog_customizer_defaults['st-blog-enable-social-media']
	),
	'control' => array(
		'label'				=> esc_html__('Enable/Disable Social Media'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);


// social name link-1
$st_blog_settings_controls['st-blog-social-link'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-link']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Link First','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'url',
		'priority'			=> 30,
		'active_callback'	=> ''	
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Name First','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'text', 
		'priority'			=> 20,
		'active_callback'	=> ''	
	)		

);

// social name link-1
$st_blog_settings_controls['st-blog-social-button'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-button']
	),
	'control' => array(
		'label'				=> esc_html__('Social button','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'button',
		'priority'			=> 30,
		'active_callback'	=> ''	
	)	

);

