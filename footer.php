<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st-blog
 */

?>
		</div><!-- .st-blog-site-content -->
	</div><!-- #content -->

	<?php get_template_part('template-parts/markup/instafeed');?>
	
	<?php get_template_part('template-parts/markup/social-icons');?>

	<footer id="colophon" class="site-footer st-blog-list">
		<div class="site-content py-0">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'st-blog' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'st-blog' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'st-blog' ), 'st-blog', '<a href="http://salientthemes.com/">Salientthemes</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
