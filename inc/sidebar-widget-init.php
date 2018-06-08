<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function st_blog_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'st-blog' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );


    register_sidebar( array(
        'name'          => esc_html__( 'Home/Front Page Full Width Widget', 'st-blog' ),
        'id'            => 'full-width-widget',
        'description'   => '<h2>'.esc_html__('Displays on footer section full width','st-blog').'</h2>',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
   $st_blog_get_all_options = st_blog_get_all_options(1);
   

    
        register_sidebar(array(
            'name' => esc_html__('Footer Column One', 'st-blog'),
            'id' => 'footer-col-one',
            'description' => esc_html__('Displays items on footer section.','st-blog'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
        
            register_sidebar(array(
                'name' => esc_html__('Footer Column Two', 'st-blog'),
                'id' => 'footer-col-two',
                'description'   => esc_html__('Displays items on footer section.','st-blog'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));
    
        
            register_sidebar(array(
                'name' => esc_html__('Footer Column Three', 'st-blog'),
                'id' => 'footer-col-three',
                'description'   => esc_html__('Displays items on footer section.','st-blog'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));
        
        
            register_sidebar(array(
                'name' => esc_html__('Footer Column Four', 'st-blog'),
                'id' => 'footer-col-four',
                'description'   => esc_html__('Displays items on footer section.','st-blog'),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ));
        
    
}
add_action( 'widgets_init', 'st_blog_widgets_init' );

require get_template_directory() . '/inc/widgets/mainpage-st-blog-tab.php';
require get_template_directory() . '/inc/widgets/mainpage-st-blog-widget-author.php';
require get_template_directory() . '/inc/widgets/mainpage-st-blog-instagaram.php';

