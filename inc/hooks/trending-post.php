<?php

if ( !function_exists('st_blog_trending_post_array') ) :
 /**
  * trending-post
  *
  * @since st-blog 1.0.0
  *
  * @param $from_slider
  * @return array
  *
  */
  function st_blog_trending_post_array($from_slider)
  {
    global $st_blog_customizer_all_values;
    $st_blog_trending_post_number         = esc_html($st_blog_customizer_all_values['st-blog-trending-number-post']);
    $st_blog_trending_single_number_word  = absint($st_blog_customizer_all_values['st-blog-trending-single-number-of-words']);

    $st_blog_trending_post_content_array[0]['st-blog-trending-post-title']      = '';
    $st_blog_trending_post_content_array[0]['st-blog-trending-post-content']    = '';
    $st_blog_trending_post_content_array[0]['st-blog-trending-post-image']      = '';
    $st_blog_trending_post_content_array[0]['st-blog-trending-post-url']        = '';

    $repeated_page =  array('trending-page-id');
    $st_blog_trending_post_args = array();

    if( 'from-category'  == $from_slider )
    {
      $st_blog_post_category  = $st_blog_customizer_all_values['st-blog-trending-select-from-category'];
      if( 0 != $st_blog_post_category )
      {
        $st_blog_trending_post_args = array(
          'post_type'           => 'post',
          // 'post_per_page'    => $st_blog_trending_post_number,
          'cat'                 => $st_blog_post_category,
          'ignore_sticky_posts' => true

        );
      }
    }
    else
    {
      $st_blog_trending_posts = salient_customizer_get_repeated_all_value(7,$repeated_page);
      if( null != $st_blog_trending_posts  )
      {
        foreach ($st_blog_trending_posts as $st_blog_trending_post)
        {
          if ( 0  != $st_blog_trending_post['trending-page-id'] )
          {
            $st_blog_trending_post_id[] = $st_blog_trending_post['trending-page-id'];
          }
        }
        if ( !empty($st_blog_trending_post_id) )
        {
          $st_blog_trending_post_args = array(
            'post_type'       => 'page',
            'post__in'        => $st_blog_trending_post_id,
            'posts_per_page'  => $st_blog_trending_post_number,
            'order_by'        => 'post'
          );

        }
      }
    }

    if ( !empty($st_blog_trending_post_args) )
    {
        // query start
        $st_blog_trending_post_query = new WP_Query($st_blog_trending_post_args);

        if ( $st_blog_trending_post_query->have_posts() ) : 
            $i = 0;
            while( $st_blog_trending_post_query->have_posts() ) : 
                $st_blog_trending_post_query->the_post();
                $thumb_image = '';
                if ( has_post_thumbnail())
                {
                    $image        = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id() ), 'trending-post-image');
                    $thumb_image  = $image['0'];
                }
                $st_blog_trending_post_content_array[$i]['st-blog-trending-post-title'] = get_the_title();
                if( has_excerpt() )
                {
                    $st_blog_trending_post_content_array[$i]['st-blog-trending-post-content']  = get_the_excerpt();
                }
                else 
                {
                    $st_blog_trending_post_content_array[$i]['st-blog-trending-post-content'] = st_blog_words_count( $st_blog_trending_single_number_word, get_the_content() );
                }
                $st_blog_trending_post_content_array[$i]['st-blog-trending-post-url']  = get_permalink();
                $st_blog_trending_post_content_array[$i]['st-blog-trending-post-image'] = $thumb_image;
                $i++;   
            endwhile;
            wp_reset_postdata();
        endif;
    }
    return $st_blog_trending_post_content_array;
  }

endif;

if ( !function_exists('st_blog_trending_post') ) :

     /**
     * trending post 
     *
     * @since st-blog 1.0.0
     *
     * @param null
     * @return null
     *
     */

    function  st_blog_trending_post()
    {
        global $st_blog_customizer_all_values;
        $st_blog_trending_post_title            = $st_blog_customizer_all_values['st-blog-trending-main-title-text'];   
        if( 1 != $st_blog_customizer_all_values['st-blog-trending-enbale'] )
        {
            return null;
        }

        $st_blog_trending_slect_post_type       = $st_blog_customizer_all_values['st-blog-trending-select-post-from'];
        $st_blog_trending_array                 =  st_blog_trending_post_array($st_blog_trending_slect_post_type); 
        if ( is_array($st_blog_trending_array) )  
        {
            $st_blog_trending_post_number       = $st_blog_customizer_all_values['st-blog-trending-number-post'];
            $st_trending_post_button_text       = $st_blog_customizer_all_values['st-blog-trending-button-text'];
            $st_trending_post_button_enable     = $st_blog_customizer_all_values['st-blog-trending-button-enable'];
            $st_trending_post_image_enable      = $st_blog_customizer_all_values['st-blog-trending-image-enable']; ?>

            
            <section id="st-blog-featured" class="mb-5">    
                <div class="container site-content">
                  <?php if (!empty($st_blog_trending_post_title)) { ?>
                    <h1 class="widget-title text-center"><?php echo esc_html($st_blog_trending_post_title);?></h1>
                  <?php } ?>  
                    <div class="st-blog-featured-slider text-center">
                        <?php
                            $i = 0;
                            foreach ($st_blog_trending_array as $st_blog_trending_array)
                            {
                                if ( $st_blog_trending_post_number < $i )
                                {
                                    break;
                                }
                                if ( empty($st_blog_trending_array['st-blog-trending-post-image']) ) 
                                {
                                    $st_blog_trending_post_image = '';
                                }
                                else
                                {
                                    $st_blog_trending_post_image = $st_blog_trending_array['st-blog-trending-post-image'];
                                }
                        
                            
                                ?>
                                      <?php if (!empty($st_blog_trending_post_image) && !empty($st_blog_trending_array['st-blog-trending-post-title']) && !empty($st_blog_trending_array['st-blog-trending-post-content'])  ) {?>
                                        <div class="st-blog-featured-item">
                                            <?php if (!empty($st_blog_trending_post_image)){ ?>
                                                <div class="st-blog-featured-image">
                                                    <img src="<?php echo esc_url($st_blog_trending_post_image);?>">
                                                </div>
                                            <?php } ?>    
                                            <div class="st-blog-featured-caption text-center">
                                                <h2 class="st-blog-title mb-3 mt-2"><a href="<?php echo esc_url($st_blog_trending_array['st-blog-trending-post-url']);?>"><?php echo esc_html($st_blog_trending_array['st-blog-trending-post-title']);?></a></h2>
                                                <p><?php echo esc_html($st_blog_trending_array['st-blog-trending-post-content']);?></p>
                                                <?php if ( !empty($st_blog_trending_array['st-blog-trending-post-url']) &&  !empty($st_trending_post_button_text)) { ?>
                                                <?php if ( 1 == $st_blog_customizer_all_values['st-blog-trending-button-enable'] ) { ?>
                                                    <a href="<?php echo esc_url($st_blog_trending_array['st-blog-trending-post-url']);?>" class="readmore"><?php echo esc_html($st_trending_post_button_text);?></a>
                                                <?php } ?> 
                                                <?php } ?>    
                                            </div>
                                        </div> 
                                      <?php } ?>                 
                                
                            <?php 
                            $i++;
                            }
                            ?>
                    </div>    
                </div>
            </section>
            
        <?php }    
    }
endif;
add_action('st_blog_homepage','st_blog_trending_post',20);
