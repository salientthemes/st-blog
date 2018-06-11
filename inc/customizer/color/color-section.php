<?php
global $st_blog_panels;
global $st_blog_sections;
global $st_blog_settings_controls;
global $st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['st-blog-site-identity-color']     = '#313131';
$st_blog_customizer_defaults['st-blog-primary-color']           = '#EF3F3D';
$st_blog_customizer_defaults['st-blog-menu-background-color']   = '#ffffff';
$st_blog_customizer_defaults['st-blog-menu-text-color']         = '#000';
$st_blog_customizer_defaults['st-blog-latest-blog-title-color'] = '#000';
$st_blog_customizer_defaults['st-blog-h1-h6-color']             = '#000';
$st_blog_customizer_defaults['st-blog-button-color']            = '#000';//fff
$st_blog_customizer_defaults['st-blog-button-text-color']       = '#fff';//000
$st_blog_customizer_defaults['st-blog-footer-background-color'] = '#fff';
$st_blog_customizer_defaults['st-blog-footer-text-color']       = '#000';
$st_blog_customizer_defaults['st-blog-color-reset']             = '';


/*Default color*/
$st_blog_sections['colors'] = array(
        'priority'       => 60,
        'title'          => esc_html__( 'Colors Options', 'st-blog' ),
        'panel'         => 'st-blog-homepage-panel'   
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
           $st_blog_customizer_saved_values['st-blog-menu-background-color']          = $st_blog_customizer_defaults['st-blog-menu-background-color'];
           $st_blog_customizer_saved_values['st-blog-menu-text-color']                = $st_blog_customizer_defaults['st-blog-menu-text-color'];
           $st_blog_customizer_saved_values['st-blog-latest-blog-title-color']        = $st_blog_customizer_defaults['st-blog-latest-blog-title-color'];
           $st_blog_customizer_saved_values['st-blog-footer-background-color']        = $st_blog_customizer_defaults['st-blog-footer-background-color'];
           $st_blog_customizer_saved_values['st-blog-footer-text-color']              = $st_blog_customizer_defaults['st-blog-footer-text-color'];
           $st_blog_customizer_saved_values['st-blog-button-color']                   = $st_blog_customizer_defaults['st-blog-button-color'];
           $st_blog_customizer_saved_values['st-blog-button-text-color']              = $st_blog_customizer_defaults['st-blog-button-text-color'];
           $st_blog_customizer_saved_values['st-blog-h1-h6-color']                    = $st_blog_customizer_defaults['st-blog-h1-h6-color'];

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
        'label'                 =>  esc_html__( 'Menu Background Color', 'st-blog' ),
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
        'label'                 =>  esc_html__( 'Menu Text Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 40,
        'active_callback'       => ''
    )
);


$st_blog_settings_controls['st-blog-latest-blog-title-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-latest-blog-title-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Latest Blog Title Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 60,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-h1-h6-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-h1-h6-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'H1-H6 Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 70,
        'active_callback'       => ''
    )
);


$st_blog_settings_controls['st-blog-button-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-button-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Button  Background Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 90,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-button-text-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-button-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Button Text Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 95,
        'active_callback'       => ''
    )
);

$st_blog_settings_controls['st-blog-footer-background-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-footer-background-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Footer Background Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 100,
        'active_callback'       => ''
    )
);



$st_blog_settings_controls['st-blog-footer-text-color'] = array(
    'setting' => array(
        'default' => $st_blog_customizer_defaults['st-blog-footer-text-color'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Footer Text Color', 'st-blog' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 110,
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