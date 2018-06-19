<?php
if ( ! function_exists( 'st_blog_image_gallery' ) ) :
    /**
    * about-event 
    *
    * @since st-blog1.0.0
    *
    * @param null
    * @return null
    *
    */
function  st_blog_image_gallery()
{
    global$st_blog_customizer_all_values;
    $st_blogimage_gal_posts = absint($st_blog_customizer_all_values['st-blog-image-galery-from-page']);

    if( !$st_blog_customizer_all_values['st-blog-enable-image-gallery'] ) {
        return null;
    }
    ?>
    <?php
    if( !empty($st_blogimage_gal_posts ))
    {
       $st_blog_feature_about_args =    array(
            'post_type' => 'page',
            'p' =>$st_blogimage_gal_posts,
            'posts_per_page' => 1

        );
       $st_blog_fature_image_gallery_post_query = new WP_Query($st_blog_feature_about_args );
        if ($st_blog_fature_image_gallery_post_query->have_posts() ) :
          while ($st_blog_fature_image_gallery_post_query->have_posts() ) :$st_blog_fature_image_gallery_post_query->the_post();
            ?>
             <!-- gallery -->
            <section id="st-blog-gallery" >
                <div class="container">
                    <h2 class="widget-title text-center"><?php the_title();?></h2>
                    <div class="st-blog-gallery-slider pb-5">
                    <?php $galleries = get_post_galleries_images(  );
                    foreach( $galleries[0] as $gallery ) {
                     ?>
                        <div class="st-blog-gallery-image">
                            <a href="#!"><img src="<?php echo ($gallery);?>"></a>
                        </div>
                    <?php } ?>
                     </div>
                </div>
           </section>
            <?php
            endwhile;
        endif;
    } 
    if( empty($st_blogimage_gal_posts ))
    {
       $st_blog_feature_about_args =    array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'orderby' => 'post__in',
        );
       $st_blog_image_post_query = new WP_Query($st_blog_feature_about_args );
        if ($st_blog_image_post_query->have_posts() ) :
          while ($st_blog_image_post_query->have_posts() ) :$st_blog_image_post_query->the_post();
            ?>
            <!-- gallery -->
            <section id="st-blog-gallery" >
                <div class="container">
                    <h2 class="widget-title text-center"><?php the_title();?></h2>
                    <div class="st-blog-gallery-slider pb-5">
                    <?php $galleries = get_post_galleries_images(  );
                    foreach( $galleries[0] as $gallery ) {
                     ?>
                        <div class="st-blog-gallery-image">
                            <a href="#!"><img src="<?php echo ($gallery);?>"></a>
                        </div>
                    <?php } ?>
                     </div>
                </div>
           </section>

            <?php
            endwhile;
        endif;
    } 
}
endif;

add_action( 'st_blog_action_front_page', 'st_blog_image_gallery', 30 );
