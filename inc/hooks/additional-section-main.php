<?php
if ( !function_exists('st_blog_additional_section_main') ) :

     /**
     * additional section main
     *
     * @since st-blog 1.0.0
     *
     * @param null
     * @return null
     *
     */

    function  st_blog_additional_section_main()
    {
         ?>
         <div class="additional-sections"></div>
         <?php
    }
endif;
add_action('st_blog_homepage_additional_section_main','st_blog_additional_section_main',20);
