<?php
global$st_blog_sections;
global$st_blog_settings_controls;
global$st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['st-blog-site-identity-color'] = '#313131';
$st_blog_customizer_defaults['st-blog-primary-color'] = '#0288d1';
$st_blog_customizer_defaults['st-blog-heading-section-title-color'] = '#000000';
$st_blog_customizer_defaults['st-blog-post-page-title-color'] = '#000000';
$st_blog_customizer_defaults['st-blog-tincket-color'] = '#000000';
$st_blog_customizer_defaults['st-blog-menu-background-color'] = '#1a2431'; 
$st_blog_customizer_defaults['st-blog-menu-text-color'] = '#fff';
$st_blog_customizer_defaults['st-blog-color-reset'] = '';



/*Default color*/
$st_blog_sections['colors'] = array(
        'priority'       => 40,
        'title'          => esc_html__( 'Colors Options', 'st-blog' )
    );



/**
 * Reset color settings to default
 *
 * @since st-blog 1.0.0
 */
if ( ! function_exists( 'st_blog_color_reset' ) ) :
    function st_blog_color_reset( ) {
        
        global$st_blog_customizer_saved_values;
        $st_blog_customizer_saved_values = st_blog_get_all_options();
      
        if ( 1 == intval($st_blog_customizer_saved_values['st-blog-color-reset'] ) ) {
            global$st_blog_customizer_defaults;
            /*getting fields*/

            /*setting fields */
           $st_blog_customizer_saved_values['st-blog-site-identity-color']            = $st_blog_customizer_defaults['st-blog-site-identity-color'] ;
           $st_blog_customizer_saved_values['st-blog-primary-color']                  = $st_blog_customizer_defaults['st-blog-primary-color'] ;
           $st_blog_customizer_saved_values['st-blog-heading-section-title-color']     = $st_blog_customizer_defaults['st-blog-heading-section-title-color'];
           $st_blog_customizer_saved_values['st-blog-post-page-title-color']          = $st_blog_customizer_defaults['st-blog-post-page-title-color'];
           $st_blog_customizer_saved_values['st-blog-menu-background-color']          = $st_blog_customizer_defaults['st-blog-menu-background-color'];
           $st_blog_customizer_saved_values['st-blog-menu-text-color']                = $st_blog_customizer_defaults['st-blog-menu-text-color'];
           $st_blog_customizer_saved_values['st-blog-tincket-color']                  = $st_blog_customizer_defaults['st-blog-tincket-color'];

            remove_theme_mod( 'background_color' );
           $st_blog_customizer_saved_values['st-blog-color-reset']                    = '';

            /*resetting fields*/
            st_blog_reset_options($st_blog_customizer_saved_values );
        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','st_blog_color_reset' );




$st_blog_settings_controls['st-blog-site-identity-color'] = array(
    'setting' =>  array(
        'default'  => $st_blog_customizer_defaults['st-blog-site-identity-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Site Identity Color', 'st-blog' ),
        'description'           =>  esc_html__( 'Site title and tagline color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 20,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-primary-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-primary-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Primary Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 30,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-menu-background-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-menu-background-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Menu background Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 35,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-menu-text-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-menu-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Menu text Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 40,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-heading-section-title-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-heading-section-title-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Section Heading Title Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 45,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-post-page-title-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-post-page-title-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Post Page Title Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 50,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-tincket-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-tincket-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Ticker  Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 60,
        'active_callback'       => ''
    )
);


$st_blog_settings_controls['st-blog-color-reset'] = array(
    'setting' => array(
        'default'   => $st_blog_customizer_defaults['st-blog-color-reset'],
        'transport'            => 'postmessage',
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Reset', 'st-blog' ),
        'description'           =>  esc_html__( 'Caution: Reset all color settings above to default. Refresh the page after saving to view the effects', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'checkbox',
        'priority'              => 220,
        'active_callback'       => ''
    )
);