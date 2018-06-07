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
		$st_blog_customizer_defaults['st-blog-footer-copy-right-text']        = 'Roboto+Condensed:400,300,400italic,700';

        $st_blog_font_family_site_identity 		= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-site-identity']];

        $st_blog_font_family_menu 				= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-menu']];
        $st_blog_font_family_h1_h6 				= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-h1-h6']];
        $st_blog_font_family_button_text 		= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-font-family-button-text']];
        $st_blog_font_family_copy_right_text 	= $st_blog_google_fonts[$st_blog_customizer_all_values['st-blog-footer-copy-right-text']];

        
        
        //*color options*/
        $st_blog_background_color 				= get_background_color();
        $st_blog_primary_color_option 			= $st_blog_customizer_all_values['st-blog-primary-color'];
        $st_blog_site_identity_color_option 	= $st_blog_customizer_all_values['st-blog-site-identity-color'];
        $st_blog_post_page_title_color 		    = $st_blog_customizer_all_values['st-blog-latest-blog-title-color'];
        $st_blog_menu_background_color 		    = $st_blog_customizer_all_values['st-blog-menu-background-color'];
        $st_blog_menu_text_color       		    = $st_blog_customizer_all_values['st-blog-menu-text-color'];
        
        $st_blog_h1_h6 				    		= $st_blog_customizer_all_values['st-blog-h1-h6-color'];
        $st_blog_button_color				    = $st_blog_customizer_all_values['st-blog-button-color'];
        $st_blog_footer_background 				= $st_blog_customizer_all_values['st-blog-footer-background-color'];
        $st_blog_footer_text_color				= $st_blog_customizer_all_values['st-blog-footer-text-color'];

        
      // ob_start();
        ?>
      
      <style type="text/css">

        /*site identity font family*/
            .site-title,
            .site-title a,
            .site-description,
            .site-description a {
                font-family: '<?php echo esc_attr( $st_blog_font_family_site_identity ); ?>'!important;
            }
            /*main menu*/
            nav#site-navigation ul a{
                font-family: '<?php echo esc_attr( $st_blog_font_family_menu ); ?>'!important;
            }
            
           	h2, h2 a, .h2, .h2 a, 
           	h2.widget-title, .h1, .h3, .h4, .h5, .h6, 
           	h1, h3, h4, h5, h6 .h1 a, .h3 a, .h4 a,
           	.h5 a, .h6 a, h1 a, h3 a, h4 a, h5 a, 
           	h6 a {
                font-family: '<?php echo esc_attr( $st_blog_font_family_h1_h6 ); ?>'!important;
            }

            /* readmore fonts*/
            .readmore{
                font-family: '<?php echo esc_attr( $st_blog_font_family_button_text ); ?>'!important;
            }

              /* footer fonts*/
            .readmore{
                font-family: '<?php echo esc_attr( $st_blog_font_family_copy_right_text ); ?>'!important;
            }



        /*=====COLOR OPTION=====*/
        /*Color*/
        /*----------------------------------*/
        <?php 
        /*Primary*/
        if( !empty($st_blog_primary_color_option) ){
        ?>

        .header-btn-group i,
        .st-sidebar-tab-style li.clickme a,
        #return-to-top, .author-more,
        form.search-form input.search-submit,
        .st-author-description h2:after,
        #trending-section .widget-title:after,
        #secondary .widget-title:after,
        #pollSlider-button,
        .st-main-footer h2:after,
        .header-btn-group i,
        a.read-more-btn,
        #return-to-top,
        #return-to-top:hover,
        form.search-form input.search-submit,
        input#submit,
        .error-404.not-found input.search-submit,
        .author-more,
        .st-custom-widget-section .widget-title:after,
		#st-full-width .widget-title:after,
		.news-heading-only:after,
		#st-widget-style-3 .st-widget-3-heading-desc:after,
		a.btn,
		.btn {
        	background-color: <?php echo esc_attr( $st_blog_primary_color_option ) ;?>;
        }            

       #st-full-width .slick-dots li.slick-active button:before,
       .author-more:hover,
       #trending-section .slick-dots li.slick-active button:before,
       .st-main-footer a:hover,
       .site-branding .site-title a span,
       ul.slick-dots li.slick-active button:before,
       .top-header .top-nav-bar ul li a:hover,
		.site-branding .site-title a:hover,
		#site-navigation a:hover,
		.random i:hover,
		#content .entry-title a:hover,
		header.entry-header a:hover,
		#content article a:hover,
		.st-main-footer a:hover,
		#secondary ul li a:hover,
		#secondary a:hover,
		.st-slider-caption h2 a:hover,
		.left-style h2 a:hover,
		.right-style h2 a:hover,
		.st-sidebar-tab-style .tab-heading-title h2 a:hover,
		.st-sidebar-slider h2 a:hover,
		.style-2-desc h2 a:hover,
		.latest-blog-st h2 a:hover,
		section#st-full-width h2 a:hover,
		.thumbnailstyle-heading-title h2 a:hover,
		.st-widget-style-1 .st-w-post-meta a:hover,
		.post-meta-content span a:hover,
		.st-author-description h2 a:hover,
		#trending-section .news-heading-only h2 a:hover,
		#breadcrumb ul li a:hover,
		.widget li a:hover,
		.widget a:hover,
		h2 a:hover,
		div#st-widget-style-3 h2 a:hover,
		.st-w-post-meta a:hover,
		.st-w-post-meta span a:hover {
          color: <?php echo esc_attr( $st_blog_primary_color_option );?>;
        }

        a.read-more-btn,
        #content .nav-links a,
        .author-more,
        {
        	border-color: <?php echo esc_attr( $st_blog_primary_color_option ) ;?>!important;;
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

        
        if( !empty($st_blog_post_page_title_color) )
        {?>
            
           #st-blog-featured .slick-list .slick-slide .st-blog-featured-caption .st-blog-title a,
           .site-content .st-blog-item article .entry-title a
           
            {
                color: <?php echo esc_attr( $st_blog_post_page_title_color ) ;?>!important;
            }

        <?php
        }

       
        if( !empty($st_blog_menu_background_color) )
        {?>
        	body.big-logo.big-logo-enable nav#site-navigation,
        	header.site-header .st-blog-header-wrap-nav
        	{
        		background: <?php echo esc_attr($st_blog_menu_background_color);?> !important;
        	}

        <?php }

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
        		background-color: <?php echo esc_attr($st_blog_footer_background);?>!important;
        	}

        <?php }

        if( !empty($st_blog_footer_text_color) )
        {?>
        	.site-info, .site-info a
        	{
        		color: <?php echo esc_attr($st_blog_footer_text_color);?>!important;
        	}

        <?php }

         if( !empty($st_blog_button_color) )
        {?>
            a.readmore, .readmore
            {
                background-color: <?php echo esc_attr($st_blog_button_color);?>!important;
            }

        <?php }

   		?>
       </style>
    <?php

    // return ob_get_clean();
    }
endif;
add_action( 'wp_head', 'st_blog_inline_style' );

