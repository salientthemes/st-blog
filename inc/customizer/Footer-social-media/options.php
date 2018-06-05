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
	'priority'		=> 220,
);

$st_blog_sections['st-blog-social-section'] = array(
	'title'			=> esc_html__('All Social Option','st-blog'),
	'panel'			=> 'st-blog-social-panel',
	'priority'		=> 10
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
		'choices' => array(
			'twitter'			=> esc_html__('twitter','st-blog'),
			'facebook'			=> esc_html__('facebook','st-blog'),
			'google-plus'		=> esc_html__('google-plus','st-blog'),
			'flickr'			=> esc_html__('flickr','st-blog'),
			'pinterest'			=> esc_html__('pinterest','st-blog'),
			'youtube'			=> esc_html__('youtube','st-blog'),
			'vimeo'				=> esc_html__('vimeo','st-blog'),
			'tumblr'			=> esc_html__('tumblr','st-blog'),
			'dribbble'			=> esc_html__('dribbble','st-blog'),
			'linkedin'			=> esc_html__('linkedin','st-blog'),
			'instagram'			=> esc_html__('instagram','st-blog'),
			'email'			    => esc_html__('email','st-blog'),


		),
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
		'type'				=> 'select',
		'choices' => array(
			'https://twitter.com/'			=> esc_html__('https://twitter.com/','st-blog'),
			'https://www.facebook.com/'		=> esc_html__('https://www.facebook.com/','st-blog'),
			'https://plus.google.com/'		=> esc_html__('https://plus.google.com/','st-blog'),
			'https://www.flickr.com/'		=> esc_html__('https://www.flickr.com/','st-blog'),
			'https://www.pinterest.com/'	=> esc_html__('pinterest','st-blog'),
			'youtube'						=> esc_html__('youtube','st-blog'),
			'https://www.youtube.com/'		=> esc_html__('https://www.youtube.com/','st-blog'),
			'tumblr'						=> esc_html__('tumblr','st-blog'),
			'https://www.tumblr.com/'		=> esc_html__('https://www.tumblr.com/','st-blog'),
			'https://www.linkedin.com/'		=> esc_html__('https://www.linkedin.com/','st-blog'),
			'https://www.instagram.com/'	=> esc_html__('https://www.instagram.com/','st-blog'),
			'https://accounts.google.com/'	=> esc_html__('https://accounts.google.com/','st-blog'),


		),
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
		'choices' => array(
			'twitter'			=> esc_html__('twitter','st-blog'),
			'facebook'			=> esc_html__('facebook','st-blog'),
			'google-plus'		=> esc_html__('google-plus','st-blog'),
			'flickr'			=> esc_html__('flickr','st-blog'),
			'pinterest'			=> esc_html__('pinterest','st-blog'),
			'youtube'			=> esc_html__('youtube','st-blog'),
			'vimeo'				=> esc_html__('vimeo','st-blog'),
			'tumblr'			=> esc_html__('tumblr','st-blog'),
			'dribbble'			=> esc_html__('dribbble','st-blog'),
			'linkedin'			=> esc_html__('linkedin','st-blog'),
			'instagram'			=> esc_html__('instagram','st-blog'),
			'email'			    => esc_html__('email','st-blog'),


		),
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
		'type'				=> 'select',
		'choices' => array(
			'https://twitter.com/'			=> esc_html__('https://twitter.com/','st-blog'),
			'https://www.facebook.com/'		=> esc_html__('https://www.facebook.com/','st-blog'),
			'https://plus.google.com/'		=> esc_html__('https://plus.google.com/','st-blog'),
			'https://www.flickr.com/'		=> esc_html__('https://www.flickr.com/','st-blog'),
			'https://www.pinterest.com/'	=> esc_html__('pinterest','st-blog'),
			'youtube'						=> esc_html__('youtube','st-blog'),
			'https://www.youtube.com/'		=> esc_html__('https://www.youtube.com/','st-blog'),
			'tumblr'						=> esc_html__('tumblr','st-blog'),
			'https://www.tumblr.com/'		=> esc_html__('https://www.tumblr.com/','st-blog'),
			'https://www.linkedin.com/'		=> esc_html__('https://www.linkedin.com/','st-blog'),
			'https://www.instagram.com/'	=> esc_html__('https://www.instagram.com/','st-blog'),
			'https://accounts.google.com/'	=> esc_html__('https://accounts.google.com/','st-blog'),


		),
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
		'choices' => array(
			'twitter'			=> esc_html__('twitter','st-blog'),
			'facebook'			=> esc_html__('facebook','st-blog'),
			'google-plus'		=> esc_html__('google-plus','st-blog'),
			'flickr'			=> esc_html__('flickr','st-blog'),
			'pinterest'			=> esc_html__('pinterest','st-blog'),
			'youtube'			=> esc_html__('youtube','st-blog'),
			'vimeo'				=> esc_html__('vimeo','st-blog'),
			'tumblr'			=> esc_html__('tumblr','st-blog'),
			'dribbble'			=> esc_html__('dribbble','st-blog'),
			'linkedin'			=> esc_html__('linkedin','st-blog'),
			'instagram'			=> esc_html__('instagram','st-blog'),
			'email'			    => esc_html__('email','st-blog'),


		),
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
		'type'				=> 'select',
		'choices' => array(
			'https://twitter.com/'			=> esc_html__('https://twitter.com/','st-blog'),
			'https://www.facebook.com/'		=> esc_html__('https://www.facebook.com/','st-blog'),
			'https://plus.google.com/'		=> esc_html__('https://plus.google.com/','st-blog'),
			'https://www.flickr.com/'		=> esc_html__('https://www.flickr.com/','st-blog'),
			'https://www.pinterest.com/'	=> esc_html__('pinterest','st-blog'),
			'youtube'						=> esc_html__('youtube','st-blog'),
			'https://www.youtube.com/'		=> esc_html__('https://www.youtube.com/','st-blog'),
			'tumblr'						=> esc_html__('tumblr','st-blog'),
			'https://www.tumblr.com/'		=> esc_html__('https://www.tumblr.com/','st-blog'),
			'https://www.linkedin.com/'		=> esc_html__('https://www.linkedin.com/','st-blog'),
			'https://www.instagram.com/'	=> esc_html__('https://www.instagram.com/','st-blog'),
			'https://accounts.google.com/'	=> esc_html__('https://accounts.google.com/','st-blog'),


		),
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
		'choices' => array(
			'twitter'			=> esc_html__('twitter','st-blog'),
			'facebook'			=> esc_html__('facebook','st-blog'),
			'google-plus'		=> esc_html__('google-plus','st-blog'),
			'flickr'			=> esc_html__('flickr','st-blog'),
			'pinterest'			=> esc_html__('pinterest','st-blog'),
			'youtube'			=> esc_html__('youtube','st-blog'),
			'vimeo'				=> esc_html__('vimeo','st-blog'),
			'tumblr'			=> esc_html__('tumblr','st-blog'),
			'dribbble'			=> esc_html__('dribbble','st-blog'),
			'linkedin'			=> esc_html__('linkedin','st-blog'),
			'instagram'			=> esc_html__('instagram','st-blog'),
			'email'			    => esc_html__('email','st-blog'),


		),
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
		'type'				=> 'select',
		'choices' => array(
			'https://twitter.com/'			=> esc_html__('https://twitter.com/','st-blog'),
			'https://www.facebook.com/'		=> esc_html__('https://www.facebook.com/','st-blog'),
			'https://plus.google.com/'		=> esc_html__('https://plus.google.com/','st-blog'),
			'https://www.flickr.com/'		=> esc_html__('https://www.flickr.com/','st-blog'),
			'https://www.pinterest.com/'	=> esc_html__('pinterest','st-blog'),
			'youtube'						=> esc_html__('youtube','st-blog'),
			'https://www.youtube.com/'		=> esc_html__('https://www.youtube.com/','st-blog'),
			'tumblr'						=> esc_html__('tumblr','st-blog'),
			'https://www.tumblr.com/'		=> esc_html__('https://www.tumblr.com/','st-blog'),
			'https://www.linkedin.com/'		=> esc_html__('https://www.linkedin.com/','st-blog'),
			'https://www.instagram.com/'	=> esc_html__('https://www.instagram.com/','st-blog'),
			'https://accounts.google.com/'	=> esc_html__('https://accounts.google.com/','st-blog'),


		),
		'priority'			=> 90,
		'active_callback'	=> ''	
	)	

);