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
</div><!-- .container -->

<div id="banner" class="mb-5">
	<img src="http://via.placeholder.com/1350x500">
</div>

<div class="container">
	<div class="row">
		<div class="col-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;
						
						echo '<div class="row">';

							/* Start the Loop */
							while ( have_posts() ) :
							
								echo '<div class="col-sm-6 col-md-12 col-lg-6">';
							
									the_post();

									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );

								echo '</div><!-- .col -->';

							endwhile;

						echo '</div><!-- .row -->';

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				</main><!-- #main -->
			</div><!-- #primary -->			
		</div>
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php
get_footer();
