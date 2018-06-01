<?php
global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_repetesd_settings_control;
global $st_blog_customizer_defaults;

// defaults value;
$st_blog_customizer_defaults['st-blog-enable-latest-news'] = 1;
$st_blog_customizer_defaults['st-blog-latest-news-main-title'] = esc_html__('LATEST NEWS','st-blog');
$st_blog_customizer_defaults['st-blog-single-number-of-word']   = 25;
$st_blog_customizer_defaults['st-blog-lates-news-number-of-post'] = 3;
$st_blog_customizer_defaults['st-blog-latest-blog-from-cat'] = 1;

// create a section for
$st_blog_sections['st-blog-latest-news-section'] = array(
	'title'								=> esc_html__('Latest-News','st-blog'),
	'panel'								=> 'st_blog_home_main_panel',
	'priority'							=>60
);

// create a enable button for latest news blog
$st_blog_settings_controls['st-blog-enable-latest-news'] = array(
	'setting' => array(
		'default' => $st_blog_customizer_defaults['st-blog-enable-latest-news']
	),
	'control' => array(
		'label'							=> esc_html__('Enable Latest News','st-blog'),
		'section'						=> 'st-blog-latest-news-section',
		'type'							=> 'checkbox',
		'priority'						=> 10,
		'active_callback'				=> ''
	)
);

// create a enable button for latest news blog
$st_blog_settings_controls['st-blog-latest-news-main-title'] = array(
	'setting' => array(
		'default' => $st_blog_customizer_defaults['st-blog-latest-news-main-title']
	),
	'control' => array(
		'label'							=> esc_html__('Main Title','st-blog'),
		'section'						=> 'st-blog-latest-news-section',
		'type'							=> 'text',
		'priority'						=> 20,
		'active_callback'				=> ''
	)
);

// create a single number for latest news blog
$st_blog_settings_controls['st-blog-lates-news-number-of-post'] = array(
	'setting' => array(
		'default' => $st_blog_customizer_defaults['st-blog-lates-news-number-of-post']
	),
	'control' => array(
		'label'							=> esc_html__('Select Number of Post','st-blog'),
		'section'						=> 'st-blog-latest-news-section',
		'type'							=> 'number',
		'priority'						=> 40,
		'active_callback'				=> ''
	)
);

// creat a select option for latest news 
$st_blog_settings_controls['st-blog-single-number-of-word'] = array(
	'setting' => array(
		'default' => $st_blog_customizer_defaults['st-blog-single-number-of-word']
	),
	'control' => array(
		'label'							=> esc_html__('Select Number of World','st-blog'),
		'section'						=> 'st-blog-latest-news-section',
		'type'							=> 'number',
		'inupt_attr'					=> array('min' => 1, 'max' => 400),
		'priority'						=> 30,
		'active_callback'				=> ''
	)
);

// create a category vchoes  for latest news blog
$st_blog_settings_controls['st-blog-latest-blog-from-cat'] = array(
	'setting' => array(
		'default' => $st_blog_customizer_defaults['st-blog-latest-blog-from-cat']
	),
	'control' => array(
		'label'							=> esc_html__('Select Category Post','st-blog'),
		'section'						=> 'st-blog-latest-news-section',
		'type'							=> 'category_dropdown',
		'priority'						=> 50,
		'active_callback'				=> ''
	)
);
