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
 	$st_blog_social_media_name   = esc_html($st_blog_customizer_all_values['st-blog-social-media-name']);
 	$st_blog_social_media_link   = esc_url($st_blog_customizer_all_values['st-blog-social-link']);
 	

 	if( 1 != $st_blog_customizer_all_values['st-blog-enable-social-media'] )
 	{
 		return null;
 	}
 	?>
 	<section id="st-blog-social-icons" class="mb-5">
		<div class="container site-content">
			<div class="menu-social-nav-container">
				<ul id="social-nav" class="menu">
					<li><a href="<?php echo esc_url($st_blog_social_media_link); ?>"></a></li>
				</ul>
			</div>
			<button>Add NEW ACCount</button>
		</div>
	</section>
 	<?php
 }
endif;
add_action('st_blog_action_front_page','st_blog_social_media',50);

