<?php

global$st_blog_sections;
global$st_blog_settings_controls;
global$st_blog_repeated_settings_controls;
global$st_blog_customizer_defaults;

/*defaults values*/
$st_blog_customizer_defaults['st-blog-enable-static-page'] = 1;
$st_blog_customizer_defaults['st-blog-default-layout'] = 'right-sidebar';
$st_blog_customizer_defaults['st-blog-single-post-image-align'] = '';
// $st_blog_customizer_defaults['st-blog-excerpt-length'] = '50';
$st_blog_customizer_defaults['st-blog-archive-layout'] = 'thumbnail-and-excerpt';
$st_blog_customizer_defaults['st-blog-archive-image-align'] = 'full';
// $st_blog_customizer_defaults['st-blog-alternate-layout'] = 1;
$st_blog_customizer_defaults['st-blog-default-body-layout'] = 'boxed';


$st_blog_sections['st-blog-back-all-theme-setting'] = array(
    'priority'       => 30,
    'title'          => esc_html__( 'Layout Options', 'st-blog' ),
    'panel'          => 'st-blog-homepage-panel',
);

    /*home page static page display*/
$st_blog_settings_controls['st-blog-enable-static-page'] = array(
'setting' => array(
    'default' => $st_blog_customizer_defaults['st-blog-enable-static-page'],
),
'control' => array(
    'label'                 =>  esc_html__( 'Enable Static Front Page', 'st-blog' ),
    'description'           =>  esc_html__( 'If you disable this the static page will be disappera form the home page and other section from customizer will reamin as it is', 'st-blog' ),
    'section'               => 'st-blog-back-all-theme-setting',
    'type'                  => 'checkbox',
    'priority'              => 10,
)
);


/*layout-options option responsive lodader start*/

$st_blog_settings_controls['st-blog-default-layout'] = array(
    'setting' =>  array(
        'default'              =>$st_blog_customizer_defaults['st-blog-default-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Default Layout', 'st-blog' ),
        'description'           =>  esc_html__( 'Please note that this section can be overridden for individual page/posts', 'st-blog' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices'               => array(
            'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'st-blog' ),
            'left-sidebar' => esc_html__( 'Primary Sidebar - Content', 'st-blog' ),
            'no-sidebar' => esc_html__( 'No Sidebar', 'st-blog' )
        ),
        'priority'              => 20,
        'active_callback'       => ''
    )
);


$st_blog_settings_controls['st-blog-single-post-image-align'] = array(
    'setting' =>  array(
        'default'  =>$st_blog_customizer_defaults['st-blog-single-post-image-align'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Alignment of Image in Single Post/Page', 'st-blog' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices'               => array(
            'full'      => esc_html__( 'Full', 'st-blog' ),
            'right'     => esc_html__( 'Right', 'st-blog' ),
            'left'      => esc_html__( 'Left', 'st-blog' ),
            'no-image'  => esc_html__( 'No image', 'st-blog' )
        ),
        'priority'              => 40,
        'description'           =>  esc_html__( 'Please note that this setting can be override from individual post/page', 'st-blog' ),
    )
);


$st_blog_settings_controls['st-blog-archive-layout'] = array(
    'setting' =>  array(
        'default'              =>$st_blog_customizer_defaults['st-blog-archive-layout'],
    ),
    'control' => array(
        'label'                 =>  esc_html__( 'Archive Layout', 'st-blog' ),
        'section'               => 'st-blog-back-all-theme-setting',
        'type'                  => 'select',
        'choices'               => array(
            'excerpt-only' => esc_html__( 'Excerpt Only', 'st-blog' ),
            'thumbnail-and-excerpt' => esc_html__( 'Thumbnail and Excerpt', 'st-blog' ),
            'full-post' => esc_html__( 'Full Post', 'st-blog' ),
            'thumbnail-and-full-post' => esc_html__( 'Thumbnail and Full Post', 'st-blog' ),
        ),
        'priority'              => 55,
    )
);

// $st_blog_settings_controls['st-blog-alternate-layout'] =
//     array(
//         'setting' =>     array(
//             'default'              => $st_blog_customizer_defaults['st-blog-alternate-layout'],
//         ),
//         'control' => array(
//             'label'                 =>  esc_html__( 'Alternate Archive Image Alignment', 'st-blog' ),
//             'section'               => 'st-blog-back-all-theme-setting',
//             'type'                  => 'checkbox',
//             'priority'              => 60,
//         )
//     );


$st_blog_settings_controls['st-blog-default-body-layout'] =
        array(
            'setting' =>     array(
                'default'              => $st_blog_customizer_defaults['st-blog-default-body-layout'],
            ),
            'control' => array(
                'label'                 =>  esc_html__( 'Blog Post Layout', 'st-blog' ),
                'section'               => 'st-blog-back-all-theme-setting',
                'type'                  => 'select',
                'choices'               => array(
                    'boxed'         => esc_html__( 'Grid Layout', 'st-blog' ),
                    'full-width'    => esc_html__( 'Full Width Layout', 'st-blog' ),
                ),
                'priority'              => 70,
                'active_callback'       => ''
            )
        );


