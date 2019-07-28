<?php
/**
 * Slide Show Settings
 *
 * Register General section, settings and controls for Theme Customizer
 *
 * @package Gridbox
 */

/**
 * Adds all general settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function gridbox_customize_register_footer_settings($wp_customize)
{
    // Add Section for Theme Options.
    $wp_customize->add_section('gridbox_section_footer', [
        'title' => esc_html__('Footer Settings', 'gridbox'),
        'priority' => 600,
        /*        'panel' => 'gridbox_options_panel',*/
    ]);

    $wp_customize->add_setting(
        'organization_name_footer',
        [
            'default' => '',
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'address_footer',
        [
            'default' => '',
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'mobile_number_footer',
        [
            'default' => '',
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'email_footer',
        [
            'default' => '',
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'art_name_footer',
        [
            'default' => '',
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control('organization_name__footer_controller',
        [
            'label' => 'Organization name',
            'section' => 'gridbox_section_footer',
            'settings' => 'organization_name_footer',
            'allow_addition' => true, /*Show UI for adding new content*/
        ]
    );

    $wp_customize->add_control('address_footer_controller', [
        'label' => 'Address',
        'section' => 'gridbox_section_footer',
        'settings' => 'address_footer',
        'allow_addition' => true, /*Show UI for adding new content*/
    ]);

    $wp_customize->add_control('mobile_number_footer_controller',
        [
            'label' => 'Mobile number',
            'section' => 'gridbox_section_footer',
            'settings' => 'mobile_number_footer',
            'allow_addition' => true, /*Show UI for adding new content*/
        ]
    );

    $wp_customize->add_control('email_footer_controller',
        [
            'label' => 'Email',
            'section' => 'gridbox_section_footer',
            'settings' => 'email_footer',
            'allow_addition' => true, /*Show UI for adding new content*/
        ]
    );

    $wp_customize->add_control('art_name_footer_controller',
        [
            'label' => 'Art name',
            'section' => 'gridbox_section_footer',
            'settings' => 'art_name_footer',
            'allow_addition' => true, /*Show UI for adding new content*/
        ]
    );

}

add_action('customize_register', 'gridbox_customize_register_footer_settings');


