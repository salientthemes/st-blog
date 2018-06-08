<?php

global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repeated_settings_controls;
global $st_blog_customizer_defaults;

$st_blog_customizer_defaults['st-blog-enable-social-media']     = 1;
$st_blog_customizer_defaults['st-blog-social-media-name-one']		= '';
$st_blog_customizer_defaults['st-blog-social-link-one']				= '';
$st_blog_customizer_defaults['st-blog-social-media-name-two']		= '';
$st_blog_customizer_defaults['st-blog-social-link-two']				= '';
$st_blog_customizer_defaults['st-blog-social-media-name-three']		= '';
$st_blog_customizer_defaults['st-blog-social-link-three']			= '';
$st_blog_customizer_defaults['st-blog-social-media-name-four']		= '';
$st_blog_customizer_defaults['st-blog-social-link-four']			= '';

$st_blog_panels['st-blog-social-panel'] = array(
	'title'			=> esc_html__('Social Media','st-blog'),
	'priority'		=> 240,
);

$st_blog_sections['st-blog-social-section'] = array(
	'title'			=> esc_html__('All Social Option','st-blog'),
	'panel'			=> 'st-blog-homepage-panel',
	'priority'		=> 50
);


$st_bolg_all_social_media_name = array(
	'twitter'		=> 'twitter',
	'facebook'		=> 'facebook',
	'google-plus'	=> 'google-plus',
	'flickr'		=> 'flickr',
	'pinterest'		=> 'pinterest',
	'youtube'		=> 'youtube',
	'vimeo'			=> 'vimeo',
	'tumblr'		=> 'tumblr',
	'dribbble'		=> 'dribbble',
	'linkedin'		=> 'linkedin',
	'instagram'		=> 'instagram',
	'email'			=> 'email'

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

// social name-1
$st_blog_settings_controls['st-blog-social-media-name-one'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-media-name-one']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Name First','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'select',
		'choices'			=> $st_bolg_all_social_media_name, 
		'priority'			=> 20,
		'active_callback'	=> ''	
	)	

);

// social name link-1
$st_blog_settings_controls['st-blog-social-link-one'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-link-one']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Link First','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback'	=> ''	
	)	

);

// social name-2
$st_blog_settings_controls['st-blog-social-media-name-two'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-media-name-two']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Name Second','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'select',
		'choices' 			=>  $st_bolg_all_social_media_name,
		'priority'			=> 40,
		'active_callback'	=> ''	
	)	

);

// social name link-2
$st_blog_settings_controls['st-blog-social-link-two'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-link-two']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Link Second','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'text',
		'priority'			=> 50,
		'active_callback'	=> ''	
	)	

);

// social name-3
$st_blog_settings_controls['st-blog-social-media-name-three'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-media-name-three']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Name Three','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'select',
		'choices' 			=> $st_bolg_all_social_media_name,
		'priority'			=> 60,
		'active_callback'	=> ''	
	)	

);

// social name link-3
$st_blog_settings_controls['st-blog-social-link-three'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-link-three']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Link Three','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'text',
		'priority'			=> 70,
		'active_callback'	=> ''	
	)	

);

// social name-4
$st_blog_settings_controls['st-blog-social-media-name-four'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-media-name-four']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Name Four','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'select',
		'choices' 			=> $st_bolg_all_social_media_name, 
		'priority'			=> 80,
		'active_callback'	=> ''	
	)	

);

// social name link-4
$st_blog_settings_controls['st-blog-social-link-four'] = array(
	'setting' => array(
		'default'	=> $st_blog_customizer_defaults['st-blog-social-link-four']
	),
	'control' => array(
		'label'				=> esc_html__('Social Media Link Four','st-blog'),
		'section'			=> 'st-blog-social-section',
		'type'				=> 'text',
		'priority'			=> 90,
		'active_callback'	=> ''	
	)	

);