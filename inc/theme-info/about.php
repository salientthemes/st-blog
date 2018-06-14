<?php
/**
 * About configuration
 *
 * @package eCommerce_Gem
 */

$config = array(
	'menu_name' => esc_html__( 'About ST-Blog', 'st-blog' ),
	'page_name' => esc_html__( 'About ST-Blog', 'st-blog' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'st-blog' ), 'St-Blog' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'st-blog' ), 'St-blog' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','st-blog' ),
			'url'  => 'https://www.salientthemes.com/',
			// 'url'  => 'https://promenadethemes.com/downloads/st-blog/',

			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','st-blog' ),
			'url'  => 'https://www.salientthemes.com/',
			// 'url'  => 'https://promenadethemes.com/demo/st-blog/',

			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','st-blog' ),
			'url'    => 'https://www.salientthemes.com/',
			// 'url'    => 'https://promenadethemes.com/documentation/st-blog/',

			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','st-blog' ),
			'url'  => 'https://www.salientthemes.com/',
			// 'url'  => 'https://wordpress.org/support/theme/st-blog/reviews/',

			),
		'pro_url' => array(
			'text' => esc_html__( 'Upgrade To Pro Theme','st-blog' ),
			'url'  => 'https://www.salientthemes.com/',
			// 'url'  => 'https://promenadethemes.com/downloads/st-blog-plus',

			'button' => 'primary',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'st-blog' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'st-blog' ),
		'useful_plugins'      => esc_html__( 'Useful Plugins', 'st-blog' ),
		'demo_content'        => esc_html__( 'Demo Content', 'st-blog' ),
		'support'             => esc_html__( 'Support', 'st-blog' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'st-blog' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'st-blog' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'st-blog' ),
			'button_label'        => esc_html__( 'View documentation', 'st-blog' ),
			'button_link'         => 'https://www.salientthemes.com/',
			// 'button_link'         => 'https://promenadethemes.com/documentation/st-blog/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'st-blog' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'st-blog' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'st-blog' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=st-blog-about&tab=recommended_actions' ) ),
			// 'button_link'         => esc_url( admin_url( 'themes.php?page=st-blog-about&tab=recommended_actions' ) ),

			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'st-blog' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'st-blog' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'st-blog' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),

		array(
			'title'        			=> esc_html__( 'Youtube Video Tutorials', 'st-blog' ),
			'text'         			=> esc_html__( 'Please check our youtube channel for video instructions of eCommerce Gem setup and customization.', 'st-blog' ),
			'button_label' 			=> esc_html__( 'Video Tutorials', 'st-blog' ),
			 'button_link'  			=> 'https://www.salientthemes.com/',
			// 'button_link'  			=> 'https://www.youtube.com/watch?v=YUBUosw64AA&list=PL-Ic437QwxQ8cW5jX4XC0or7vYzUhZX7s',

			'is_button'    			=> false,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		array(
			'title'        			=> esc_html__( 'Pro Version', 'st-blog' ),
			'text'         			=> esc_html__( 'Upgrade to pro version for additional features and options.', 'st-blog' ),
			'button_label' 			=> esc_html__( 'View Pro Version', 'st-blog' ),
			'button_link'  			=> 'https://www.salientthemes.com/',
			// 'button_link'  			=> 'https://promenadethemes.com/downloads/st-blog-plus/',
			'is_button'    			=> true,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),

		'first' => array(
			'title'        			=> esc_html__( 'Contact Support', 'st-blog' ),
			'text'         			=> esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'st-blog' ),
			'button_label' 			=> esc_html__( 'Contact Support', 'st-blog' ),
			'button_link'  			=> esc_url( 'https://www.salientthemes.com/' ),
			// 'button_link'  			=> esc_url( 'https://promenadethemes.com/support/item/st-blog/' ),
			'is_button'    			=> false,
			'recommended_actions' 	=> false,
			'is_new_tab'   			=> true,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			// 'woocommerce' => array(
			// 	'title'       => esc_html__( 'WooCommerce', 'st-blog' ),
			// 	'description' => esc_html__( 'Please install WooCommerce plugin.', 'st-blog' ),
			// 	'check'       => class_exists( 'WooCommerce' ),
			// 	'plugin_slug' => 'woocommerce',
			// 	'id'          => 'woocommerce',
			// ),
			// 'woocommerce-pages' => array(
			// 	'title'       => esc_html__( 'WooCommerce Pages', 'st-blog' ),
			// 	'description' => sprintf( esc_html__( 'Please make sure all WooCommerce pages are set properly. %1$s', 'st-blog' ), '<a href="https://docs.woocommerce.com/document/woocommerce-pages/" target="_blank">' . esc_html__( 'Reference', 'st-blog' ) . '</a>' ),
			// 	'check'       => st_blog_woocommerce_pages_status(),
			// 	'id'          => 'woocommerce-pages',
			// 	'help'        => st_blog_woocommerce_pages_status_message(),
			// ),
			'front-page' => array(
				'title'       => esc_html__( 'Setting Static Front Page','st-blog' ),
				'description' => esc_html__( 'Create a new page to display on front page ( Ex: Home ) and assign "Home" template. Select A static page then Front page and Posts page to display front page specific sections. Note: Static page will be set automatically when you import demo content.', 'st-blog' ),
				'id'          => 'front-page',
				'check'       => ( 'page' === get_option( 'show_on_front' ) ) ? true : false,
				'help'        => '<a href="' . esc_url( wp_customize_url() ) . '?autofocus[section]=static_front_page" class="button button-secondary">' . esc_html__( 'Static Front Page', 'st-blog' ) . '</a>',
			),

			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'st-blog' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'st-blog' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Useful plugins.
	'useful_plugins' => array(
		'description'        => esc_html__( 'This theme supports some helpful WordPress plugins to enhance your website.', 'st-blog' ),
		'plugins_list_title' => esc_html__( 'Useful Plugins List:', 'st-blog' ),
	),

	// Demo content.
	'demo_content' => array(
		'description' => sprintf( esc_html__( 'Install %1$s plugin to import demo content. Demo data are bundled within the theme, Please make sure plugin is installed and activated. After plugin activation, go to Import Demo Data menu under Appearance and import it.', 'st-blog' ), '<a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank">' . esc_html__( 'One Click Demo Import', 'st-blog' ) . '</a>' ),
		),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'st-blog' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'st-blog' ),
			'button_label' => esc_html__( 'Contact Support', 'st-blog' ),
			'button_link'  => esc_url( 'https://www.salientthemes.com/' ),
			// 'button_link'  => esc_url( 'https://promenadethemes.com/support/item/st-blog/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'st-blog' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'st-blog' ),
			'button_label' => esc_html__( 'View Documentation', 'st-blog' ),
			'button_link'  => 'https://www.salientthemes.com/',
			// 'button_link'  => 'https://promenadethemes.com/documentation/st-blog/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
			'title'        => esc_html__( 'Pro Version', 'st-blog' ),
			'icon'         => 'dashicons dashicons-products',
			'icon'         => 'dashicons dashicons-star-filled',
			'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'st-blog' ),
			'button_label' => esc_html__( 'View Pro Version', 'st-blog' ),
			'button_link'  => 'https://www.salientthemes.com/',
			// 'button_link'  => 'https://promenadethemes.com/downloads/st-blog-plus/',
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Youtube Video Tutorials', 'st-blog' ),
			'icon'         => 'dashicons dashicons-video-alt3',
			'text'         => esc_html__( 'Please check our youtube channel for video instructions of eCommerce Gem setup and customization.', 'st-blog' ),
			'button_label' => esc_html__( 'Video Tutorials', 'st-blog' ),
			'button_link'  => 'https://www.salientthemes.com/',
			// 'button_link'  => 'https://www.youtube.com/watch?v=YUBUosw64AA&list=PL-Ic437QwxQ8cW5jX4XC0or7vYzUhZX7s',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Customization Request', 'st-blog' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'st-blog' ),
			'button_label' => esc_html__( 'Customization Request', 'st-blog' ),
			'button_link'  => 'https://www.salientthemes.com/',
			// 'button_link'  => 'https://promenadethemes.com/contact-us/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(
			'title'        => esc_html__( 'Child Theme', 'st-blog' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'st-blog' ),
			'button_label' => esc_html__( 'About child theme', 'st-blog' ),
			'button_link'  => 'https://www.salientthemes.com/',
			// 'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
	),

    // Free vs pro array.
    'free_pro' => array(

	    // array(
		   //  'title'     => esc_html__( 'WooCommerce Ready', 'st-blog' ),
		   //  'desc'      => esc_html__( 'Theme supports/works with WooCommerce plugin', 'st-blog' ),
		   //  'free'      => esc_html__('yes','st-blog'),
		   //  'pro'       => esc_html__('yes','st-blog'),
	    // ),

	    array(
		    'title'     => esc_html__( 'Slider Support', 'st-blog' ),
		    'desc'      => esc_html__( 'Supports Slider Revolution, Layer Slider, Hero Slider, etc.', 'st-blog' ),
		    'free'      => esc_html__('no','st-blog'),
		    'pro'       => esc_html__('yes','st-blog'),
	    ),
	    array(
		    'title'     => esc_html__( 'Google Fonts', 'st-blog' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'st-blog' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','st-blog'),
	    ),
	    array(
		    'title'     => esc_html__( 'Primary Color Option', 'st-blog' ),
		    'desc'      => esc_html__( 'Option to change primary color of the site', 'st-blog' ),
		    'free'      => esc_html__('yes','st-blog'),
		    'pro'       => esc_html__('yes','st-blog'),
	    ),
        array(
    	    'title'     => esc_html__( 'Advance Color Options', 'st-blog' ),
    	    'desc'      => esc_html__( 'Options to change color of individual sections like top header, site title, menu, footer, etc of the site', 'st-blog' ),
    	    'free'      => esc_html__('no','st-blog'),
    	    'pro'       => esc_html__('yes','st-blog'),
        ),
        array(
    	    'title'     => esc_html__( 'Latest Product Carousel', 'st-blog' ),
    	    'desc'      => esc_html__( 'Widget to display latest products in carousel mode', 'st-blog' ),
    	    'free'      => esc_html__('yes','st-blog'),
    	    'pro'       => esc_html__('yes','st-blog'),
        ),

        array(
    	    'title'     => esc_html__( 'Featured Product Carousel', 'st-blog' ),
    	    'desc'      => esc_html__( 'Widget to display featured products in carousel mode', 'st-blog' ),
    	    'free'      => esc_html__('yes','st-blog'),
    	    'pro'       => esc_html__('yes','st-blog'),
        ),
        array(
    	    'title'     => esc_html__( 'Hide Footer Credit', 'st-blog' ),
    	    'desc'      => esc_html__( 'Option to enable/disable Powerby(Designer) credit in footer', 'st-blog' ),
    	    'free'      => esc_html__('no','st-blog'),
    	    'pro'       => esc_html__('yes','st-blog'),
        ),
        array(
    	    'title'     => esc_html__( 'Override Footer Credit', 'st-blog' ),
    	    'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'st-blog' ),
    	    'free'      => esc_html__('no','st-blog'),
    	    'pro'       => esc_html__('yes','st-blog'),
        ),
	    array(
		    'title'     => esc_html__( 'SEO', 'st-blog' ),
		    'desc' 		=> esc_html__( 'Developed with high skilled SEO tools.', 'st-blog' ),
		    'free'  	=> 'yes',
		    'pro'   	=> 'yes',
	    ),
	    array(
		    'title'     => esc_html__( 'Support Forum', 'st-blog' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'st-blog' ),
		    'free'      => esc_html__('yes', 'st-blog'),
		    'pro'       => esc_html__('High Priority', 'st-blog'),
	    )

    ),

);
St_blog_About::init( apply_filters( 'st_blog_about_filter', $config ) );
