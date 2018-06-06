<?php
if ( ! function_exists( 'st_blog_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since st-blog 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function st_blog_before_footer()
    { ?>
    </div><!-- .st-blog-site-content -->
    </div><!-- #content -->
        <?php do_action('st_blog_action_front_page');?>
        <?php do_action('footer_social_media');?>
    <!-- </section> -->
    
        <!-- *****************************************
             Footer section starts
    ****************************************** -->
    <footer id="colophon" class="site-footer st-blog-list">
        <?php
        }
    endif;
    add_action( 'st_blog_action_before_footer', 'st_blog_before_footer', 10 );

    if ( ! function_exists( 'st_blog_widget_before_footer' ) ) :
        /**
         * Footer content
         *
         * @since st-blog 1.0.0
         *
         * @param null
         * @return false | void
         *
         */
        function st_blog_widget_before_footer() {
                global$st_blog_customizer_all_values;
               $st_blog_footer_widgets_number =$st_blog_customizer_all_values['st-blog-footer-sidebar-number'];
                if (!is_active_sidebar('full-width-footer') && !is_active_sidebar( 'footer-col-one' ) && !is_active_sidebar( 'footer-col-two' ) && !is_active_sidebar( 'footer-col-three' ) && !is_active_sidebar( 'footer-col-four' )){
                    return false;
                }
                if( 1 == $st_blog_footer_widgets_number ){
                    $col = 'col-md-12';
                }
                elseif( 2 == $st_blog_footer_widgets_number ){
                 $col = 'col-md-6 col-sm-6 col-xs-12';
                }
                elseif( 3 == $st_blog_footer_widgets_number ){
                    $col = 'col-md-4 col-sm-4 col-xs-12';
                }
                else{
              
                        $col = 'col-md-3 col-sm-3 col-xs-12'; 
                    } ?>

                     <!-- full width footer -->
                    <section class="wrapper block-section wrap-contact footer-widget full-width">
                        <div class="container full-width-footer">
                            <div class="row">
                                <div id="full-width-footer">
                                <?php
                                if(is_active_sidebar('full-width-footer')){
                                dynamic_sidebar('full-width-footer');
                                }
                                ?>
                            </div>
                        </div>
                    </section><!-- full width widget ended -->

                    <div class="footer-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <?php if( is_active_sidebar( 'footer-col-one' ) && $st_blog_footer_widgets_number > 0 ) : ?>
                                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                                <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( is_active_sidebar( 'footer-col-two' ) && $st_blog_footer_widgets_number > 1 ) : ?>
                                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                                <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( is_active_sidebar( 'footer-col-three' ) && $st_blog_footer_widgets_number > 2 ) : ?>
                                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                                <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if( is_active_sidebar( 'footer-col-four' ) && $st_blog_footer_widgets_number > 2 ) : ?>
                                            <div class="contact-list <?php echo esc_attr( $col );?>">
                                                <?php dynamic_sidebar( 'footer-col-four' ); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                        </div>   
                    </div>  
        <!-- footer widget -->
        
            
        <?php
        }
    endif;
    add_action( 'st_blog_action_widget_before_footer', 'st_blog_widget_before_footer', 10 );

    if ( ! function_exists( 'st_blog_footer' ) ) :
        /**
         * Footer content
         *
         * @since st-blog 1.0.0
         *
         * @param null
         * @return null
         *
         */
        function st_blog_footer() {
            global$st_blog_customizer_all_values;
            ?> 
            <!-- footer site info -->
            <div class="site-content py-0">
            <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'st-blog' ) ); ?>">
                    <?php
                        if(isset($st_blog_customizer_all_values['st-blog-copyright-text'])){
                            echo wp_kses_post( $st_blog_customizer_all_values['st-blog-copyright-text'] );
                        }
                        ?>
                </a>
                <?php if ( 1 == $st_blog_customizer_all_values['footer-enable-theme-name'] ) { ?>
                <span class="sep"> | </span>
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'st-blog' ), 'st-blog', '<a href="http://salientthemes.com/">Salientthemes</a>' );
                    ?>
                <?php } ?>    
            </div><!-- .site-info -->
        </div>
        

        </footer><!-- #colophon -->
        </div><!-- #page -->
        <!-- *****************************************
                 Footer section ends
        ****************************************** -->
        <?php
        }
    endif;
    add_action( 'st_blog_action_footer', 'st_blog_footer', 10 );

    if ( ! function_exists( 'st_blog_page_end' ) ) :
        /**
         * Page end
         *
         * @since st-blog 1.0.0
         *
         * @param null
         * @return null
         *
         */
        function st_blog_page_end() {
        global$st_blog_customizer_all_values;
            ?>
        <?php
         if( 1 ==$st_blog_customizer_all_values['st-blog-enable-back-to-top']) {
            ?>
                
            <!-- scroll-top -->
            <a href="#!" id="st-blog-scroll-top" class="btn"><i class="fas fa-long-arrow-alt-up"></i>Scroll Top</a><!-- return to top button -->
            <?php
            } ?>
        </div><!-- #page -->
        <?php }
    endif;
    add_action( 'st_blog_action_after', 'st_blog_page_end', 10 );