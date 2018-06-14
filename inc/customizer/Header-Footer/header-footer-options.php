<?php

	global $st_blog_panels;
	global $st_blog_sections;
	global $st_blog_settings_controls;
	global $st_blog_repeated_settings_controls;
	global $st_blog_customizer_defaults;

	$st_blog_customizer_defaults['header-logo-left-middel-right']	= '';
	$st_blog_customizer_defaults['st-blog-default-logo-layout'] = 'center';
	$st_blog_customizer_defaults['header-search-button-enable']		= 1;
	$st_blog_customizer_defaults['footer-enable-theme-name']   		= 1;
	$st_blog_customizer_defaults['st-blog-copyright-text'] 			= esc_html__('Copyright &copy; All right reserved','st-blog'); 

	$st_blog_sections['header-footer-section'] 	= array(
		'title'		=> esc_html__('Header Footer Options','st-blog'),
		'panel'		=> 'st-blog-homepage-panel',
		'priority'	=> 5
	);

	$st_blog_settings_controls['header-search-button-enable'] = array(
	    'setting' =>  array(
	        'default'              => $st_blog_customizer_defaults['header-search-button-enable'],
	    ),
	    'control' => array(
	        'label'                 =>  esc_html__( 'Enable/Disable Search Button', 'st-blog' ),
	        'section'               => 'header-footer-section',
	        'type'                  => 'checkbox',
	        'priority'              => 10,
	    )
    );

    $st_blog_settings_controls['st-blog-default-logo-layout'] = array(
        'setting' =>     array(
            'default'              => $st_blog_customizer_defaults['st-blog-default-logo-layout'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Logo Layout', 'st-blog' ),
            'section'               => 'header-footer-section',
            'type'                  => 'select',
            'choices' => array(
                'logo-left'         => esc_html__( 'Left', 'st-blog' ),
                'big-logo'         	=> esc_html__( 'Center', 'st-blog' ),
                'logo-right'        => esc_html__( 'Right','st-blog')   
            ),
            'priority'              => 15,
            'active_callback'       => ''
        )
    );

	$st_blog_settings_controls['footer-enable-theme-name'] = array(
        'setting' =>  array(
            'default'              => $st_blog_customizer_defaults['footer-enable-theme-name'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable/Disable Footer Theme Name', 'st-blog' ),
            'section'               => 'header-footer-section',
            'type'                  => 'checkbox',
            'priority'              => 20,
        )
    );

	$st_blog_settings_controls['st-blog-copyright-text'] =
    array(
        'setting' =>  array(
            'default'              => $st_blog_customizer_defaults['st-blog-copyright-text'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Copyright Text', 'st-blog' ),
            'section'               => 'header-footer-section',
            'type'                  => 'text_html',
            'priority'              => 30,
        )
    );