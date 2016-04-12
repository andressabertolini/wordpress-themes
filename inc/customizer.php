<?php
// -------------------------------------------------------------------------
// Customizer function - start
// -------------------------------------------------------------------------

function customizer($wp_customize){

// -------------------------------------------------------------------------
// Social Icons
// -------------------------------------------------------------------------

    $wp_customize->add_section(
        'social-icons',
        array(
            'title'       => __('Social Icons','diadge'),
            'description' => __('Change links and disable social networks icons','diadge'),
            'priority'    => 30,
        )
    );

// -------------------------------------------------------------------------
// Social Icons - Facebook
// -------------------------------------------------------------------------

    $wp_customize->add_setting(
        'facebook_link',
        array(
            'default'   => 'http://',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'facebook_link',
        array(
            'label'    => __('Facebook','diadge'),
            'section'  => 'social-icons',
            'settings' => 'facebook_link',
            'type'     => 'text',
        )
    ));

    $wp_customize->add_setting(
        'facebook_show',
        array(
            'default'   => '1',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'facebook_show',
        array(
            'label'    => __('Show','diadge'),
            'section'  => 'social-icons',
            'settings' => 'facebook_show',
            'type'     => 'checkbox',
        )
    ));

// -------------------------------------------------------------------------
// Social Icons - Twitter
// -------------------------------------------------------------------------

    $wp_customize->add_setting(
        'twitter_link',
        array(
            'default'   => 'http://',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'twitter_link',
        array(
            'label'    => __('Twitter','diadge'),
            'section'  => 'social-icons',
            'settings' => 'twitter_link',
            'type'     => 'text',
        )
    ));

    $wp_customize->add_setting(
        'twitter_show',
        array(
            'default'   => '1',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'twitter_show',
        array(
            'label'    => __('Show','diadge'),
            'section'  => 'social-icons',
            'settings' => 'twitter_show',
            'type'     => 'checkbox',
        )
    ));

// -------------------------------------------------------------------------
// Social Icons - Instagram
// -------------------------------------------------------------------------

    $wp_customize->add_setting(
        'instagram_link',
        array(
            'default'   => 'http://',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'instagram_link',
        array(
            'label'    => __('Instagram','diadge'),
            'section'  => 'social-icons',
            'settings' => 'instagram_link',
            'type'     => 'text',
        )
    ));

    $wp_customize->add_setting(
        'instagram_show',
        array(
            'default'   => '1',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'instagram_show',
        array(
            'label'    => __('Show','diadge'),
            'section'  => 'social-icons',
            'settings' => 'instagram_show',
            'type'     => 'checkbox',
        )
    ));

// -------------------------------------------------------------------------
// Sidebar
// -------------------------------------------------------------------------

    $wp_customize->add_section(
        'sidebar',
        array(
            'title'       => __('Sidebar','diadge'),
            'description' => __('Sidebar settings','diadge'),
            'priority'    => 30,
        )
    );

    $wp_customize->add_setting(
        'sidebar_position',
        array(
            'default'   => 'right',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'sidebar_position',
        array(
            'label'    => __('Position','diadge'),
            'section'  => 'sidebar',
            'settings' => 'sidebar_position',
            'type'     => 'radio',
            'choices'  => array(
                'left'  => 'right',
                'right' => 'left',
            ),
        )
    ));

// -------------------------------------------------------------------------
// Sidebar - Author
// -------------------------------------------------------------------------

    $wp_customize->add_setting(
        'author_option',
        array(
            'default'   => 'wordpress',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'author_option',
        array(
            'label'    => __('Style','diadge'),
            'section'  => 'sidebar',
            'settings' => 'author_option',
            'type'     => 'radio',
            'choices'  => array(
                'left'  => 'wordpress',
                'right' => 'diadge',
            ),
        )
    ));

    $wp_customize->add_setting(
        'author_name',
        array(
            'default'   => __('Name','diadge'),
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'author_name',
        array(
            'label'    => __('Author name','diadge'),
            'section'  => 'sidebar',
            'settings' => 'author_name',
            'type'     => 'text',
        )
    ));

    $wp_customize->add_setting(
        'author_description',
        array(
            'default'   => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'author_description',
        array(
            'label'    => __('Author Description','diadge'),
            'section'  => 'sidebar',
            'settings' => 'author_description',
            'type'     => 'textarea',
        )
    ));

    $wp_customize->add_setting(
        'author_image',
        array(
            'default'   => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        'author_image', 
        array(
            'label' => __('Author Image','diadge'),
            'section' => 'author',
        ) 
    ));


    // -------------------------------------------------------------------------
    // Footer
    // -------------------------------------------------------------------------

    $wp_customize->add_section(
        'footer',
        array(
            'title'       => __('Footer','diadge'),
            'description' => __('Edit the text in footer','diadge'),
            'priority'    => 30,
        )
    );

    $wp_customize->add_setting(
        'footer_text',
        array(
            'default'   => __('All rights reserved','diadge'),
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_text',
        array(
            'label'    => 'footer',
            'section'  => 'footer',
            'settings' => 'footer_text',
            'type'     => 'text',
        )
    ));

    $wp_customize->add_setting(
        'footer_logo',
        array(
            'default'   => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        'footer_logo', 
        array(
            'label' => __('Footer Logo','diadge'),
            'section' => 'footer',
        ) 
    ));

    // -------------------------------------------------------------------------
    // Preferences
    // -------------------------------------------------------------------------

    $wp_customize->add_section(
        'preferences',
        array(
            'title'       => __('Preferences','diadge'),
            'description' => __('Choose your preferences','diadge'),
            'priority'    => 30,
        )
    );

    $wp_customize->add_setting(
        'show_uncategorized',
        array(
            'default'   => '0',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'show_uncategorized',
        array(
            'label'    => __('Show Uncategorized Tag','diadge'),
            'section'  => 'preferences',
            'settings' => 'show_uncategorized',
            'type'     => 'checkbox',
        )
    ));

    $wp_customize->add_setting(
        'show_comments',
        array(
            'default'   => '1',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'show_comments',
        array(
            'label'    => __('Show Comments','diadge'),
            'section'  => 'preferences',
            'settings' => 'show_comments',
            'type'     => 'checkbox',
        )
    ));

    $wp_customize->add_setting(
        'show_views',
        array(
            'default'   => '1',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'show_views',
        array(
            'label'    => __('Show Views','diadge'),
            'section'  => 'preferences',
            'settings' => 'show_views',
            'type'     => 'checkbox',
        )
    ));

    $wp_customize->add_setting(
        'show_author',
        array(
            'default'   => '1',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'show_author',
        array(
            'label'    => __('Show author','diadge'),
            'section'  => 'preferences',
            'settings' => 'show_author',
            'type'     => 'checkbox',
        )
    ));

    $wp_customize->add_setting(
        'upload_favicon',
        array(
            'default'   => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        'upload_favicon', 
        array(
            'label' => __('Upload Favicon (Recommend .ico or .png format)','diadge'),
            'section' => 'preferences',
        ) 
    ));


// -------------------------------------------------------------------------
// Colors
// -------------------------------------------------------------------------
 
     $wp_customize->add_section(
        'color_scheme',
        array(
            'title'       => __('Color Scheme','diadge'),
            'description' => __('You can choose a set of pre-selected colors or select one by one','diadge'),
            'priority'    => 30,
        )
    );

// -------------------------------------------------------------------------
// Colors - Colors Scheme
// -------------------------------------------------------------------------

    $wp_customize->add_setting(
        'scheme_main',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'scheme_main', 
        array(
            'label' => __('Main color','diadge'),
            'section' => 'color_scheme',
        ) 
    ));


    // -------------------------------------------------------------------------
    // Colors - Personalized Colors
    // -------------------------------------------------------------------------

    $wp_customize->add_setting(
        'menu_color',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'menu_color', 
        array(
            'label' => __('Menu','diadge'),
            'section' => 'color_scheme',
        ) 
    ));


    $wp_customize->add_setting(
        'image_transparency',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'image_transparency', 
        array(
            'label' => __('Header Image Transparency','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'date_color',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'date_color', 
        array(
            'label' => __('Date box color','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'title_color',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'title_color', 
        array(
            'label' => __('Titles color','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'comment_color',
        array(
            'default'   => '#2bb4f6',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'comment_color', 
        array(
            'label' => __('Comments color','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'sidebar_title_color',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'sidebar_title_color', 
        array(
            'label' => __('Sidebar titles','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'sidebar_cat_color',
        array(
            'default'   => '#2bb4f6',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'sidebar_cat_color', 
        array(
            'label' => __('Catheghories','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'post_author_color',
        array(
            'default'   => '#005176',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'post_author_color', 
        array(
            'label' => __('Author name in Post','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'icons_color',
        array(
            'default'   => '#999999',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'icons_color', 
        array(
            'label' => __('View icons','diadge'),
            'section' => 'color_scheme',
        ) 
    ));

    $wp_customize->add_setting(
        'footer_color',
        array(
            'default'   => '#105272',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'footer_color', 
        array(
            'label' => __('Footer','diadge'),
            'section' => 'color_scheme',
        ) 
    ));
// -------------------------------------------------------------------------
// Customizer function - end
// -------------------------------------------------------------------------

}

?>