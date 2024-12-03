<?php

function caju_customizer( $wp_customize ) {
    //Banner Home Section - Header
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero Section',
        )
    );

    //Title Hero
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'Please, add some title',
            'sanitize_callback' => 'santize_text_field'
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
            'default' => 'Please, add some subtitle',
            'sanitize_callback' => 'sanitize_texarea_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Hero Subtitle',
            'description' => 'Por favor, insira um subtitle',
            'section' => 'sec_hero',
            'type' => 'textarea'
        )
    );


    // Button
    $wp_customize->add_setting(
        'set_hero_button',
        array(
            'type' => 'theme_mod',
            'default' => 'Please, add some button',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_hero_button',
        array(
            'lebel' => 'Button',
            'description' => 'Por favor, insira o nome do  botão',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    //Link
    $wp_customize->add_setting(
        'sec_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => 'Por favor, insira uma url válida',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'sec_hero_button_link',
        array(
            'label' => 'Link',
            'description' => 'Link for hero',
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    //Height
    $wp_customize->add_setting(
        'sec_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 500,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'sec_hero_height',
        array(
            'label' => 'Height',
            'description' =>  'Height for img',
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Hero Background
    $wp_customize->add_setting(
        'sec_hero_background',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'sec_hero_background', array(
        'label' => 'Background',
        'section' => 'sec_hero',   
        'mime_type' => 'image'
    ) ));
}


add_action('customize_register', 'caju_customizer');