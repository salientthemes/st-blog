<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st-blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('template-parts/markup/preloader');?>

<?php get_template_part('template-parts/markup/frontend-customizer');?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'st-blog' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="st-blog-header-wrap">
			<div class="st-blog-header-wrap-nav">
				<div class="container">
					<div class="row">
						<div class="col-3 st-blog-logo-manage">
							<div class="site-branding">
								<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
											<!-- <img src="<?php echo get_template_directory_uri();?>/assets/build/img/logo.png"> -->
											<?php bloginfo( 'name' ); ?>
										</a>
									</h1>
									<?php
								else :
									?>
									<h1 class="site-title">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
											<!-- <img src="<?php echo get_template_directory_uri();?>/assets/build/img/logo.png"> -->
											<?php bloginfo( 'name' ); ?>
										</a>
									</h1>
									<?php
								endif;
								$st_blog_description = get_bloginfo( 'description', 'display' );
								if ( $st_blog_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $st_blog_description; /* WPCS: xss ok. */ ?></p>
								<?php endif; ?>
							</div><!-- .site-branding -->					
						</div><!-- site brand-->
						<div class="col-9 text-right">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'st-blog' ); ?></button>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
							</nav><!-- #site-navigation -->		

							<!-- search toggle icon -->
							<button class="st-blog-head-search-toggler"><i class="fas fa-search"></i></button>
						</div><!-- site nav -->
					</div>
				</div>
			</div>

			<div class="st-blog-head-search">
				<div class="container">
				    <?php get_search_form();?>
			    </div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
		<div class="st-blog-site-content">

