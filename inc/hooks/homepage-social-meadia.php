<?php

if ( !function_exists('st_blog_social_media') ) :

 /**
  * Social Media
  *
  * @since st-blog 1.0.0
  *
  * @param null
  * @return null
  *
  */
 function st_blog_social_media()
 {
 	global $st_blog_customizer_all_values;
 	$st_blog_social_media_link1   = esc_url($st_blog_customizer_all_values['st-blog-social-link1']);
 	$st_blog_social_media_link2   = esc_url($st_blog_customizer_all_values['st-blog-social-link2']);
  $st_blog_social_media_link3   = esc_url($st_blog_customizer_all_values['st-blog-social-link3']);
 	$st_blog_social_media_link4   = esc_url($st_blog_customizer_all_values['st-blog-social-link4']);

 	if( 1 != $st_blog_customizer_all_values['st-blog-enable-social-media'] )
 	{
 		return null;
 	}
  if(!empty($st_blog_social_media_link1) || !empty($st_blog_social_media_link2) || !empty($st_blog_social_media_link3) || !empty($st_blog_social_media_link4)) {
 	?>
  <!-- gallery -->
  <section id="st-blog-gallery" class="d-none">
    <div class="container">
      <h2 class="widget-title text-center">GALLERY</h2>

      <div class="st-blog-gallery-slider pb-5">
        <div class="st-blog-gallery-image">
            <a href="#!"><img src="https://gdurl.com/Aq4r"></a>
        </div>
        
        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/5EjE"></a>
        </div>
        
        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/BWro"></a>
        </div>
        
        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/NNTv"></a>
        </div>

        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/qmTx"></a>
        </div>

        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/b47t"></a>
        </div>

        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/FCSZ"></a>
        </div>

        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/Jct1"></a>
        </div>

        <div class="st-blog-gallery-image">
            <a href="#!"><img src="http://gdurl.com/B1u3"></a>
        </div>

      </div>
    </div>
  </section>


 	<section id="st-blog-social-icons" class="mb-5">
		<div class="container site-content pt-1">
			<div class="menu-social-nav-container">
				<ul id="social-nav" class="menu">
          <?php if( !empty($st_blog_social_media_link1)  ) {?>
					<li><a href="<?php echo esc_url($st_blog_social_media_link1); ?>" target="_blank"></a></li>
          <?php } ?>
          <?php if( !empty($st_blog_social_media_link2)  ) {?>
          <li><a href="<?php echo esc_url($st_blog_social_media_link2); ?>" target="_blank"></a></li>
          <?php } ?>
          <?php if( !empty($st_blog_social_media_link3)  ) {?>
          <li><a href="<?php echo esc_url($st_blog_social_media_link3); ?>" target="_blank"></a></li>
          <?php } ?>
          <?php if( !empty($st_blog_social_media_link4)  ) {?>
          <li><a href="<?php echo esc_url($st_blog_social_media_link4); ?>" target="_blank"></a></li>
          <?php } ?>
				</ul>
			</div>
		</div>
	</section>
 	<?php
  }//end if !empty
 }
endif;
add_action('st_blog_action_front_page','st_blog_social_media',50);

