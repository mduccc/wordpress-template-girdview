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
function gridbox_customize_register_slideshow_settings($wp_customize)
{
    // Add Section for Theme Options.
    $wp_customize->add_section('gridbox_section_slideshow', [
        'title' => esc_html__('Slide Show Settings', 'gridbox'),
        'priority' => 10,
        /*        'panel' => 'gridbox_options_panel',*/
    ]);

    for ($i=0; $i<10; $i++) {
        $wp_customize->add_setting(
            'upload_setting'.$i,
            [
                'default' => '',
                'type' => 'theme_mod'
            ]
        );

        $wp_customize->add_setting(
            'description_setting'.$i,
            [
                'default' => '',
                'type' => 'theme_mod'
            ]
        );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'upload_controller'.$i, [
            'label' => 'Add New Slide',
            'section' => 'gridbox_section_slideshow',
            'settings' => 'upload_setting'.$i,
            'allow_addition' => true, /*Show UI for adding new content*/
        ]));

        $wp_customize->add_control('description_controller'.$i,
            [
                'label' => 'Description',
                'section' => 'gridbox_section_slideshow',
                'settings' => 'description_setting'.$i,
                'allow_addition' => true, /*Show UI for adding new content*/
            ]
        );
    }


}

add_action('customize_register', 'gridbox_customize_register_slideshow_settings');


