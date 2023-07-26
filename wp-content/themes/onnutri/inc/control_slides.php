<?php  

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'image_slide_1',
        [
            'label' => __('Imagem do slide 1', 'theme_textdomain'),
            'section' => 'slide_1_theme',
            'mime_type' => 'image', // other options, e.g. audio 
        ]
    )
);

$wp_customize->add_control('title_slide_1', array(
    'type' => 'text',
    'section' => 'slide_1_theme', // // Add a default or your own section
    'label' => __('Titulo do conteúdo do slide'),
    'description' => __('Titulo do conteúdo do slide.'),
));
$wp_customize->add_control('content_slide_1', array(
    'type' => 'textarea',
    'section' => 'slide_1_theme', // // Add a default or your own section
    'label' => __('Conteúdo do slide'),
    'description' => __('Conteúdo do slide.'),
));
$wp_customize->add_control('link_slide_1', array(
    'type' => 'text',
    'section' => 'slide_1_theme', // // Add a default or your own section
    'label' => __('Link do botão do slide'),
    'description' => __('Link do botão do slide.'),
));
$wp_customize->add_control('whats_slide_1', array(
    'type' => 'text',
    'section' => 'slide_1_theme', // // Add a default or your own section
    'label' => __('Whatsapp'),
    'description' => __('Whatsapp.'),
));

/**
 * Slide 2
 */
$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'image_slide_2',
        [
            'label' => __('Imagem do slide 2', 'theme_textdomain'),
            'section' => 'slide_2_theme',
            'mime_type' => 'image', // other options, e.g. audio 
        ]
    )
);

$wp_customize->add_control('title_slide_2', array(
    'type' => 'text',
    'section' => 'slide_2_theme', // // Add a default or your own section
    'label' => __('Titulo do conteúdo do slide'),
    'description' => __('Titulo do conteúdo do slide.'),
));
$wp_customize->add_control('content_slide_2', array(
    'type' => 'textarea',
    'section' => 'slide_2_theme', // // Add a default or your own section
    'label' => __('Conteúdo do slide'),
    'description' => __('Conteúdo do slide.'),
));
$wp_customize->add_control('link_slide_2', array(
    'type' => 'text',
    'section' => 'slide_2_theme', // // Add a default or your own section
    'label' => __('Link do botão do slide'),
    'description' => __('Link do botão do slide.'),
));
$wp_customize->add_control('whats_slide_2', array(
    'type' => 'text',
    'section' => 'slide_2_theme', // // Add a default or your own section
    'label' => __('Whatsapp'),
    'description' => __('Whatsapp.'),
));