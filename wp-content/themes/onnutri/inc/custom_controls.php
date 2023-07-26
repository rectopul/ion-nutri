<?php
/**
 * Custom Controls
 *   Panels
*/

function rmb_customize_panels($wp_customize)
{
    $wp_customize->add_panel('ion_nutri_theme_options', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'title'          => 'Opções tema On Nutri',
        'description'    => 'Edite e altere informações do tema On Nutri',
    ));
}
add_action('customize_register', 'rmb_customize_panels');

/**
 * Sections
 */

function rmb_customize_sections($wp_customize)
{
    $wp_customize->add_section('slide_1_theme', array(
        'title'    => __('Slide 1 do tema', 'on-nutri'),
        'capability' => 'edit_theme_options',
        'description' => __('Altere os slides do tema'),
        'priority' => 1,
        'panel'            => 'ion_nutri_theme_options'
    ));

    $wp_customize->add_section('slide_2_theme', array(
        'title'    => __('Slide 2 do tema', 'on-nutri'),
        'capability' => 'edit_theme_options',
        'description' => __('Altere os slides do tema'),
        'priority' => 1,
        'panel'            => 'ion_nutri_theme_options'
    ));

    $wp_customize->add_section('test_in_theme', array(
        'title'    => __('Sessão de teste', 'on-nutri'),
        'capability' => 'edit_theme_options',
        'description' => __('Altere as opções da sessão de teste'),
        'priority' => 1,
        'panel'            => 'ion_nutri_theme_options'
    ));
}
add_action('customize_register', 'rmb_customize_sections');


 /**
 * Settings
 */

 function rmb_customize_settings($wp_customize)
 {
    $wp_customize->add_setting('image_slide_1', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('title_slide_1', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('content_slide_1', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('link_slide_1', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('whats_slide_1', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    /**
     * Slide 2
     */
    $wp_customize->add_setting('image_slide_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('title_slide_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('content_slide_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('link_slide_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('whats_slide_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    /**
     * Sessão de teste
     * panel: test_in_theme
     */

    $wp_customize->add_setting('image_session_test', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_subtitle', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_title', array(
    'default'           => '',
    'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_description', array(
    'default'           => '',
    'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_link', array(
    'default'           => '',
    'transport' => 'postMessage',
    ));

    /**
     * Segundo Bloco de teste
     */

     $wp_customize->add_setting('image_session_test_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_subtitle_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_title_2', array(
    'default'           => '',
    'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('test_session_description_2', array(
    'default'           => '',
    'transport' => 'postMessage',
    ));
 }
 add_action('customize_register', 'rmb_customize_settings');

 /**
 * Controls
 */

 function rmb_custom_controls($wp_customize)
 {
    require get_template_directory() . '/inc/control_slides.php';
    require get_template_directory() . '/inc/controls_test_session.php';
 }

 add_action('customize_register', 'rmb_custom_controls');

 /**
 * Partials
 */

 function rmb_custom_partials($wp_customize)
 {
    //Message credit
    $wp_customize->selective_refresh->add_partial(
        'section_message_residence',
        [
            'selector' => '.message-residencia span',
            'render_callback' => 'theme_custom_first_message',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
 }
 add_action('customize_register', 'rmb_custom_partials');