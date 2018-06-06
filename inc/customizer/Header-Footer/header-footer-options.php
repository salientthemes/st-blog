<?php

	global $st_blog_panels;
	global $st_blog_sections;
	global $st_blog_settings_controls;
	global $st_blog_repeated_settings_controls;
	global $st_blog_customizer_defaults;

	$st_blog_customizer_defaults['header-logo-left-middel-right']	= '';
	$st_blog_customizer_defaults['header-search-button-enable']		= 1;
	$st_blog_customizer_defaults['footer-enable-theme-name']   		= 1;
	$st_blog_customizer_defaults['st-blog-footer-sidebar-number'] 	= 4;
	$st_blog_customizer_defaults['st-blog-copyright-text'] 			= esc_html__('Copyright &copy; All right reserved.','st-blog'); 

	$st_blog_sections['header-footer-section'] 	= array(
		'title'		=> esc_html__('Header Footer  options','st-blog'),
		// 'panels'	=> 'header-footer-panel',
		'priority'	=> 10
	);

	$st_blog_settings_controls['footer-enable-theme-name'] = array(
        'setting' =>  array(
            'default'              =>$st_blog_customizer_defaults['footer-enable-theme-name'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable/Disable Footer Theme Name', 'st-blog' ),
            'section'               => 'header-footer-section',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );

	$st_blog_settings_controls['header-search-button-enable'] = array(
	    'setting' =>  array(
	        'default'              =>$st_blog_customizer_defaults['header-search-button-enable'],
	    ),
	    'control' => array(
	        'label'                 =>  esc_html__( 'Enable/Disable Search Button', 'st-blog' ),
	        'section'               => 'header-footer-section',
	        'type'                  => 'checkbox',
	        'priority'              => 10,
	    )
    );


	$st_blog_settings_controls['st-blog-footer-sidebar-number'] = array(
	    'setting' => array(
	        'default' => $st_blog_customizer_defaults['st-blog-footer-sidebar-number'],
	    ),
	    'control' => array(
	        'label'                 =>  esc_html__( 'Number of Sidebars In Footer Area', 'st-blog' ),
	        'section'               => 'header-footer-section',
	        'type'                  => 'select',
	        'choices'               => array(
	            0 => esc_html__( 'Disable footer sidebar area', 'st-blog' ),
	            1 => esc_html__( '1', 'st-blog' ),
	            2 => esc_html__( '2', 'st-blog' ),
	            3 => esc_html__( '3', 'st-blog' ),
	            4 => esc_html__( '4', 'st-blog' )
	        ),
	        'priority'              => 20,
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
            'section'               => 'header-footer-section',
            'type'                  => 'text_html',
            'priority'              => 30,
        )
    );