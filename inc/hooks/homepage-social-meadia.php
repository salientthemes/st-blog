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
 	$st_blog_social_media_name_one   = $st_blog_customizer_all_values['st-blog-social-media-name-one'];
 	$st_blog_social_media_link_one   = $st_blog_customizer_all_values['st-blog-social-link-one'];
 	$st_blog_social_media_name_two   = $st_blog_customizer_all_values['st-blog-social-media-name-two'];
 	$st_blog_social_media_link_two   = $st_blog_customizer_all_values['st-blog-social-link-two'];
 	$st_blog_social_media_name_three = $st_blog_customizer_all_values['st-blog-social-media-name-three'];
 	$st_blog_social_media_link_three = $st_blog_customizer_all_values['st-blog-social-link-three'];
 	$st_blog_social_media_name_four  = $st_blog_customizer_all_values['st-blog-social-media-name-four'];
 	$st_blog_social_media_link_four  = $st_blog_customizer_all_values['st-blog-social-link-four'];

 	if( 1 != $st_blog_customizer_all_values['st-blog-enable-social-media'] )
 	{
 		return null;
 	}
 	?>
 	<section id="st-blog-social-icons" class="mb-5">
		<div class="container site-content">
			<div class="menu-social-nav-container">
				<ul id="social-nav" class="menu">
					<li><a href="<?php echo esc_url($st_blog_social_media_link_one); ?>"><?php echo esc_html($st_blog_social_media_name_one);?></a></li>
					<li><a href="<?php echo esc_url($st_blog_social_media_link_two); ?>"><?php echo esc_html($st_blog_social_media_name_two);?></a></li>
					<li><a href="<?php echo esc_url($st_blog_social_media_link_three); ?>"><?php echo esc_html($st_blog_social_media_name_three);?></a></li>
					<li><a href="<?php echo esc_url($st_blog_social_media_link_four); ?>"><?php echo esc_html($st_blog_social_media_name_four);?></a></li>
				</ul>
			</div>
		</div>
	</section>
 	<?php
 }
endif;
add_action('st_blog_action_front_page','st_blog_social_media',50);