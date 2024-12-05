<?php

function caju_customizer( $wp_customize ) {
    //Banner Home Section - Header
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero Section'
        )
    );

    //Title Hero
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'Por Favor, insira um título',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => 'Hero Title',
            'description' => 'Por favor, digite seu título aqui',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'Por favor, digite seu subtitle',
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Hero Subtitle',
            'description' => 'Por favor, insira um subtitle aqui',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );


    // Button
    $wp_customize->add_setting(
        'set_hero_button',
        array(
            'type' => 'theme_mod',
            'default' => 'Por favor, digite o texto para o botão',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_hero_button',
        array(
            'lebel' => 'Button',
            'description' => 'Por favor, insira o nome do botão',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    //Btn Link
    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => 'Link',
            'description' => 'Ler Mais',
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    //Height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 500,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => 'Height',
            'description' =>  'Altura para o hero',
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Hero Background
    $wp_customize->add_setting(
        'set_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'set_hero_background', array(
        'label' => 'Background',
        'section' => 'sec_hero',   
        'mime_type' => 'image'
    ) ));



    // 3. Blog
$wp_customize->add_section( 
    'sec_blog', 
    array(
        'title' =>  'Blog Section', 'caju'
) );

        // Posts por página - Blog
        $wp_customize->add_setting( 
            'set_per_page', 
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 
            'set_per_page', 
            array(
                'label' =>  'Posts per page', 'caju',
                'description' =>  'Quantos itens exibir na lista de postagens?', 'caju',			
                'section' => 'sec_blog',
                'type' => 'number'
        ) );

        // Post categories to include
        $wp_customize->add_setting( 
            'set_category_include', 
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 
            'set_category_include', 
            array(
                'label' =>  'Post categories to include', 'caju',
                'description' =>  'Valores separados por vírgula ou ID de categoria única', 'caju',
                'section' => 'sec_blog',
                'type' => 'text'
        ) );	

        // Post categories to exclude
        $wp_customize->add_setting( 
            'set_category_exclude', 
            array(
                'type' => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 
            'set_category_exclude', 
            array(
                'label' =>  'Post categories to exclude', 'caju',
                'description' =>  'Valores separados por vírgula ou ID de categoria única', 'caju',			
                'section' => 'sec_blog',
                'type' => 'text'
        ) );        
};


add_action('customize_register', 'caju_customizer');