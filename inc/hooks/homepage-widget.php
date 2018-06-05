<?php

if ( ! function_exists( 'st_blog_widget_section' ) ) :
    /**
     *
     * @since st-blog 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function st_blog_widget_section() {
        ?>
        <!-- Main Content section -->
        <div class="container pdr0">
            <section class="st-custom-widget-section clearfix"><!-- salient news home custom widget section -->
                <div class="st-custom-left-section ">
                    
                </div>
                <div class="st-custom-right-section clearfix">
                        
                </div>
            </section>
        </div>     
        <?php
    }
endif;
add_action( 'st_blog_homepage', 'st_blog_widget_section', 50 );

                                              