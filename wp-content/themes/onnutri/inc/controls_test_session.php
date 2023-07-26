<?php 
/**
 * Controls Test Session
 * section: test_in_theme
 * settings: test_session_subtitle, test_session_title, test_session_description, test_session_link
 */
$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'image_session_test',
        [
            'label' => __('Imagem da sessão de Teste', 'theme_textdomain'),
            'section' => 'test_in_theme',
            'mime_type' => 'image', // other options, e.g. audio 
        ]
    )
);

 $wp_customize->add_control('test_session_subtitle', array(
    'type' => 'text',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Subtítulo da sessão de Teste'),
    'description' => __('Subtítulo da sessão de Teste.'),
));

 $wp_customize->add_control('test_session_title', array(
    'type' => 'text',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Título da sessão de Teste'),
    'description' => __('Título da sessão de Teste.'),
));
 $wp_customize->add_control('test_session_description', array(
    'type' => 'textarea',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Descrição da sessão de Teste'),
    'description' => __('Descrição da sessão de Teste.'),
));
 $wp_customize->add_control('test_session_link', array(
    'type' => 'text',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Link do botão na sessão de teste'),
    'description' => __('Link do botão na sessão de teste.'),
));

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'image_session_test_2',
        [
            'label' => __('Imagem do segundo bloco de Teste', 'theme_textdomain'),
            'section' => 'test_in_theme',
            'mime_type' => 'image', // other options, e.g. audio 
        ]
    )
);

 $wp_customize->add_control('test_session_subtitle_2', array(
    'type' => 'text',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Subtítulo do segundo bloco de Teste'),
    'description' => __('Subtítulo do segundo bloco de Teste.'),
));

 $wp_customize->add_control('test_session_title_2', array(
    'type' => 'text',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Título do segundo bloco de Teste'),
    'description' => __('Título do segundo bloco de Teste.'),
));
 $wp_customize->add_control('test_session_description_2', array(
    'type' => 'textarea',
    'section' => 'test_in_theme', // // Add a default or your own section
    'label' => __('Descrição do segundo bloco de Teste'),
    'description' => __('Descrição do segundo bloco de Teste.'),
));