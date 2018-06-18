<?php
/**
*Inline style to use color options
**/
if( ! function_exists( 'st_blog_inline_style' ) ) :

    /**
     * style to use color options
     *
     * @since  flare 1.0.1
     */
    function st_blog_inline_style()
    {
      
        global $st_blog_customizer_all_values;

        global $st_blog_google_fonts;
        $st_blog_customizer_defaults['st-blog-font-family-site-identity']     = 'Roboto+Condensed:400,300,400italic,700';
		$st_blog_customizer_defaults['st-blog-font-family-menu']              = 'Roboto+Condensed:400,300,400italic,700';
		$st_blog_customizer_defaults['st-blog-font-family-h1-h6']             = 'Roboto+Condensed:400,300,400italic,700';
		$st_blog_customizer_defaults['st-blog-font-family-button-text']       = 'Roboto+Condensed:400,300,400italic,700';
		$st_blog_customizer_defaults['st-blog-footer-copy-right-text']        = 'Open+Sans:400,400italic,600,700';

        $st_blog_font_family_site_identity 		= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-site-identity']];

        $st_blog_font_family_h1_h6 				= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-h1-h6']];
        $st_blog_font_family_button_text 		= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-button-text']];

        
        //*color options*/
        $st_blog_background_color 				= get_background_color();
        $st_blog_primary_color_option 			= $st_blog_customizer_all_values['st-blog-primary-color'];
        $st_blog_site_identity_color_option 	= $st_blog_customizer_all_values['st-blog-site-identity-color'];
        $st_blog_menu_text_color       		    = $st_blog_customizer_all_values['st-blog-menu-text-color'];
        
        $st_blog_h1_h6 				    		= $st_blog_customizer_all_values['st-blog-h1-h6-color'];
        $st_blog_button_text_color              = $st_blog_customizer_all_values['st-blog-button-text-color'];
        $st_blog_footer_background 				= $st_blog_customizer_all_values['st-blog-footer-background-color'];
        $st_blog_footer_text_color				= $st_blog_customizer_all_values['st-blog-footer-text-color'];

        
        ?>
      
      <style type="text/css">

        /*site identity font family*/
            .site-title,
            .site-title a,
            .site-description,
            .site-description a {
                font-family: '<?php echo esc_attr( $st_blog_font_family_site_identity ); ?>'!important;
            }
                        
           	h2, h2 a, .h2, .h2 a, 
           	h2.widget-title, .h1, .h3, .h4, .h5, .h6, 
           	h1, h3, h4, h5, h6 .h1 a, .h3 a, .h4 a,
           	.h5 a, .h6 a, h1 a, h3 a, h4 a, h5 a, 
           	h6 a {
                font-family: '<?php echo esc_attr( $st_blog_font_family_h1_h6 ); ?>'!important;
            }

            /* readmore and fonts*/
            .readmore,
            .st-blog-header-wrap .st-blog-head-search form .search-submit, .widget_search form .search-submit, a.btn, .btn, a.readmore, .readmore, .wpcf7-form .wpcf7-submit, button, input[type="button"], input[type="reset"], input[type="submit"], .dark-theme .site-content a.readmore, .dark-theme .site-content .readmore, .dark-theme #st-blog-social-icons ul li a, .dark-theme-coloured .btn, .dark-theme-coloured a.btn, .dark-theme-coloured button, .dark-theme-coloured input[type="submit"], .dark-theme-coloured .st-blog-header-wrap .st-blog-head-search form .search-submit {
                font-family: '<?php echo esc_attr( $st_blog_font_family_button_text ); ?>'!important;
            }



        /*=====COLOR OPTION=====*/
        /*Color*/
        /*----------------------------------*/
        <?php 
        /*Primary*/
        if( !empty($st_blog_primary_color_option) ){
        ?>

        .st-blog-header-wrap .st-blog-head-search form .search-submit:hover, .widget_search form .search-submit:hover, .pagination .nav-links a:hover, .wp-pagenavi a:hover, .pagination .nav-links span:hover, .wp-pagenavi span:hover, .btn:hover, .readmore:hover, .wpcf7-form .wpcf7-submit:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .dark-theme .site-content .readmore:hover, .dark-theme #st-blog-social-icons ul li a:hover, .dark-theme-coloured button:hover, .dark-theme-coloured .btn, .dark-theme-coloured a.btn, .dark-theme-coloured button, .dark-theme-coloured input[type="submit"], .dark-theme-coloured .st-blog-header-wrap .st-blog-head-search form .search-submit, .dark-theme-coloured #st-blog-social-icons ul li a, .pagination .nav-links span.current, .wp-pagenavi span.current, a.readmore:hover, header.site-header .st-blog-header-wrap-nav .st-blog-menu-toggler-manage #menu-icon.menu-toggler:hover span, .nav-tabs .nav-item .nav-link.active, ul.slick-dots li button:hover, ul.slick-dots li.slick-active button, body.dark-theme.dark-theme-coloured .site-header .st-blog-header-wrap-nav, body.dark-theme.dark-theme-coloured .site-footer, body.dark-theme header.site-header .st-blog-header-wrap-nav .container .st-blog-menu-toggler-manage #menu-icon.menu-toggler:hover span {
        	background-color: <?php echo esc_attr( $st_blog_primary_color_option ) ;?>;
        }            

        a:hover, .st-blog-item article .entry-title a:hover, #st-blog-featured .slick-list .slick-slide .st-blog-featured-item .st-blog-featured-caption .st-blog-title a:hover, .widget_categories ul li a:hover, .widget_archive ul li a:hover, .widget_recent_entries ul li a:hover, .widget_recent_comments ul li a:hover, .widget_meta ul li a:hover, .widget_pages ul li a:hover, .widget_nav_menu ul li a:hover, .breadcrumbs .trail-items .trail-item a, .st-blog-header-wrap .st-blog-header-wrap-nav .st-blog-head-search-toggler:hover i, body.head-search-active .st-blog-header-wrap .st-blog-header-wrap-nav .st-blog-head-search-toggler .fa-search, nav#site-navigation ul a:hover, nav#site-navigation ul#menu > li.current-menu-item > a, nav#site-navigation ul.nav-menu > li.current-menu-item > a, nav#site-navigation ul.menu > li.current-menu-item > a, .site-footer .site-info a:hover, .st-blog-popular-posts-item .st-blog-popular-posts-content .st-blog-popular-posts-title a:hover, #st-blog-banner .st-blog-banner-slider .slick-slide .st-blog-banner-image .st-blog-banner-caption .st-blog-title:hover, #st-blog-banner .st-blog-banner-slider .slick-slide .st-blog-banner-image .st-blog-banner-caption .st-blog-title:hover a, #st-blog-featured .slick-list .slick-slide .st-blog-featured-item .st-blog-featured-caption .st-blog-category a, body.dark-theme nav#site-navigation ul.menu > li > a:hover, body.dark-theme nav#site-navigation ul.menu > li.current-menu-item a, .dark-theme-coloured .widget-title, .dark-theme-coloured .widgettitle {
          color: <?php echo esc_attr( $st_blog_primary_color_option );?>;
        }

        a.read-more-btn,
        #content .nav-links a,
        .author-more,
        {
        	border-color: <?php echo esc_attr( $st_blog_primary_color_option ) ;?>;
        }  
        <?php
        } 
        if( !empty($st_blog_site_identity_color_option) ){
        ?>
            /*Site identity / logo & tagline*/
            .site-branding a,
            .site-branding p,
            .site-branding p a {
              color: <?php echo esc_attr( $st_blog_site_identity_color_option );?>;
            }
        <?php
        }

        
            
        if( !empty($st_blog_menu_text_color) )
        {?>
        	nav#site-navigation ul a
        	{
        		color: <?php echo esc_attr($st_blog_menu_text_color);?>;
        	}

        <?php }

        if( !empty($st_blog_footer_background) )
        {?>
        	.site-footer .site-info
        	{
        		background-color: <?php echo esc_attr($st_blog_footer_background);?>;
        	}

        <?php }

        if( !empty($st_blog_footer_text_color) )
        {?>
        	.site-info, .site-info a
        	{
        		color: <?php echo esc_attr($st_blog_footer_text_color);?>;
        	}

        <?php }

        
        if( !empty($st_blog_button_text_color) )
        {?>
            a.readmore, .readmore
            {
                color: <?php echo esc_attr($st_blog_button_text_color);?>;
            }

        <?php }

   		?>
       </style>
    <?php

    
    }
endif;
add_action( 'wp_head', 'st_blog_inline_style' );

