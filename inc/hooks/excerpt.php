<?php
if( ! function_exists( 'st_blog_excerpt_length' ) ) :

    /**
     * Excerpt length
     *
     * @since  st-blog 1.0.0
     *
     * @param null
     * @return int
     */
    function st_blog_excerpt_length( $length ){
        global$st_blog_customizer_all_values;
        if( is_admin() ) {
            return $length;
        }
        
        $excerpt_length =$st_blog_customizer_all_values['st-blog-excerpt-length'];
        if ( empty( $excerpt_length) ) {
            $excerpt_length = $length;
        }
    
        return absint( $excerpt_length );


    }

endif;
add_filter( 'excerpt_length', 'st_blog_excerpt_length', 999 );