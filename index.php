<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package st-blog
 */

get_header();
?>
	</div><!-- .st-blog-site-content -->
</div><!-- #content.container -->

<?php do_action('st_blog_homepage');?>

<div id="home-content" class="container site-content">
	<div class="st-blog-site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
					</header>
					<?php
				endif;
					
					echo '<div class="st-blog-masonry">';

						/* Start the Loop */
						while ( have_posts() ) :
							echo '<div class="st-blog-item article-grid text-center">';
							
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

							echo '</div><!-- .item.article-grid -->';

						endwhile;

					echo '</div><!-- .masonry -->';

				// the_posts_navigation();
					 // wp_pagenavi(); 
					// if (function_exists('wp-pagenavi')) 
					// { 
					// 	wp_pagenavi(); 
					// } 
					// else 
					// {
					// 	the_posts_navigation();
					// }
					 the_posts_pagination( array( 'mid_size' => 1 ) ); 

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div><!-- #primary -->			

		<?php get_sidebar(); ?>
		
	

<?php
get_footer();
