<?php
/**
 * Magista Theme Customizer
 *
 * @package Magista
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function magista_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        
        class magista_customize_textarea_control extends WP_Customize_Control {
            public $type = 'textarea';
            public function render_content() {
            ?>
                <label>
                    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                    <textarea rows="5" style="width:98%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
                </label>
            <?php
            }
        }
        $wp_customize->add_section('magista_site_name', array(
            'title' => __('Site Title Settings', 'magista'),
            'priority' => 10,
        ));
        $wp_customize->add_setting('magista_site_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_site_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_site_name',
            'settings' => 'magista_site_title',
            'priority' => 1,
        ));
        $wp_customize->add_section('magista_menu', array(
            'title' => __('Menu Settings', 'magista'),
            'priority' => 11,
        ));
        $wp_customize->add_setting('magista_menu1', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu1', array(
            'label' => __('Menu-1', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu1',
            'priority' => 1,
        ));
        $wp_customize->add_setting('magista_menu2', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu2', array(
            'label' => __('Menu-2', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu2',
            'priority' => 2,
        ));
        $wp_customize->add_setting('magista_menu3', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu3', array(
            'label' => __('Menu-3', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu3',
            'priority' => 3,
        ));
        $wp_customize->add_setting('magista_menu4', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu4', array(
            'label' => __('Menu-4', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu4',
            'priority' => 4,
        ));
        $wp_customize->add_setting('magista_menu5', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu5', array(
            'label' => __('Menu-5', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu5',
            'priority' => 5,
        ));
        $wp_customize->add_setting('magista_menu6', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu6', array(
            'label' => __('Menu-6', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu6',
            'priority' => 6,
        ));
        $wp_customize->add_setting('magista_menu7', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_menu7', array(
            'label' => __('Menu-7', 'magista'),
            'section' => 'magista_menu',
            'settings' => 'magista_menu7',
            'priority' => 7,
        ));
        $wp_customize->add_section('magista_slider_image_section', array(
            'title' => __('Slider Image Settings', 'magista'),
            'priority' => 12,
        ));
        $wp_customize->add_setting('magista_slider_title_1', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_slider_title_1', array(
            'label' => __('Magista slider title 1', 'magista'),
            'section' => 'magista_slider_image_section',
            'settings' => 'magista_slider_title_1',
            'priority' => 1,
        ));$wp_customize->add_setting('magista_slider_title_2', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_slider_title_2', array(
            'label' => __('Magista slider title 2', 'magista'),
            'section' => 'magista_slider_image_section',
            'settings' => 'magista_slider_title_2',
            'priority' => 2,
        ));
        $wp_customize->add_setting('magista_slider_title_3', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_slider_title_3', array(
            'label' => __('Magista slider title 3', 'magista'),
            'section' => 'magista_slider_image_section',
            'settings' => 'magista_slider_title_3',
            'priority' => 3,
        ));$wp_customize->add_setting('magista_slider_title_4', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_slider_title_4', array(
            'label' => __('Magista slider title 4', 'magista'),
            'section' => 'magista_slider_image_section',
            'settings' => 'magista_slider_title_4',
            'priority' => 4,
        ));
        $wp_customize->add_setting('magista_slider_image_1');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_slider_image_1', array(
                'label' => 'Slider image 1',
                'section' => 'magista_slider_image_section',
                'settings' => 'magista_slider_image_1',
                'priority' => 5,
                )
            )
        );
        $wp_customize->add_setting('magista_slider_image_2');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_slider_image_2', array(
                'label' => 'Slider image 2',
                'section' => 'magista_slider_image_section',
                'settings' => 'magista_slider_image_2',
                'priority' => 6,
                )
            )
        );
        $wp_customize->add_setting('magista_slider_image_3');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_slider_image_3', array(
                'label' => 'Slider image 3',
                'section' => 'magista_slider_image_section',
                'settings' => 'magista_slider_image_3',
                'priority' => 7,
                )
            )
        );
        $wp_customize->add_setting('magista_slider_image_4');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_slider_image_4', array(
                'label' => 'Slider image 4',
                'section' => 'magista_slider_image_section',
                'settings' => 'magista_slider_image_4',
                'priority' => 8,
                )
            )
        );
        //new section about
        $wp_customize->add_section('magista_about', array(
            'title' => __('About us Settings', 'magista'),
            'priority' => 13,
        ));
        $wp_customize->add_setting('magista_about_check', array(
            'sanitize_callback' => 'magista_sanitize_checkbox',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control('magista_about_check', array(
            'label' => __('Show About us on your Front Page', 'magista'),
            'section' => 'magista_about',
            'settings' => 'magista_about_check',
            'priority' => 1,
            'type'=>'checkbox',
        ));
        $wp_customize->add_setting('magista_about_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_about_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_about',
            'settings' => 'magista_about_title',
            'priority' => 2,
        ));
        
        $wp_customize->add_setting('magista_about_desc', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_about_desc', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_about',
            'settings' => 'magista_about_desc',
            'priority' => 3,
        )));
        $wp_customize->add_setting('magista_video_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_video_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_about',
            'settings' => 'magista_video_title',
            'priority' => 4,
        ));
        $wp_customize->add_setting('magista_home_video', array(
            'sanitize_js_callback' => 'magista_sanitize_escaping',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_home_video', array(
            'label' => __('Video Link', 'magista'),
            'section' => 'magista_about',
            'settings' => 'magista_home_video',
            'priority' => 5,
        )));
        //new section features
        $wp_customize->add_section('magista_features', array(
            'title' => __('Features Setting', 'magista'),
            'priority' => 14,
        ));
        $wp_customize->add_setting('magista_features_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title',
            'priority' => 1,
        ));
        $wp_customize->add_setting('magista_features_description', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description',
            'priority' => 2,
        )));
        $wp_customize->add_setting('magista_features_image_1');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_1', array(
                'label' => 'Service image 1',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_1',
                'priority' => 3,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_1', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_1', array(
            'label' => __('Feature-1 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_1',
            'priority' => 4,
        ));
        $wp_customize->add_setting('magista_features_description_1', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_1', array(
            'label' => __('Feature-1 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_1',
            'priority' => 5,
        )));
        $wp_customize->add_setting('magista_features_image_2');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_2', array(
                'label' => 'Service image 2',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_2',
                'priority' => 6,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_2', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_2', array(
            'label' => __('Feature-2 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_2',
            'priority' => 7,
        ));
        $wp_customize->add_setting('magista_features_description_2', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_2', array(
            'label' => __('Feature-2 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_2',
            'priority' => 8,
        )));
        $wp_customize->add_setting('magista_features_image_3');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_3', array(
                'label' => 'Service image 3',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_3',
                'priority' => 9,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_3', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_3', array(
            'label' => __('Feature-3 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_3',
            'priority' => 10,
        ));
        $wp_customize->add_setting('magista_features_description_3', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_3', array(
            'label' => __('Feature-3 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_3',
            'priority' => 11,
        )));
        $wp_customize->add_setting('magista_features_image_4');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_4', array(
                'label' => 'Service image 4',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_4',
                'priority' => 12,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_4', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_4', array(
            'label' => __('Feature-4 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_4',
            'priority' => 13,
        ));
        $wp_customize->add_setting('magista_features_description_4', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_4', array(
            'label' => __('Feature-4 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_4',
            'priority' => 14,
        )));
        $wp_customize->add_setting('magista_features_image_5');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_5', array(
                'label' => 'Service image 5',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_5',
                'priority' => 15,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_5', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_5', array(
            'label' => __('Feature-5 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_5',
            'priority' => 16,
        ));
        $wp_customize->add_setting('magista_features_description_5', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_5', array(
            'label' => __('Feature-5 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_5',
            'priority' => 17,
        )));
        $wp_customize->add_setting('magista_features_image_6');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_6', array(
                'label' => 'Service image 6',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_6',
                'priority' => 18,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_6', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_6', array(
            'label' => __('Feature-6 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_6',
            'priority' => 19,
        ));
        $wp_customize->add_setting('magista_features_description_6', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_6', array(
            'label' => __('Feature-6 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_6',
            'priority' => 20,
        )));
        $wp_customize->add_setting('magista_features_image_7');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_7', array(
                'label' => 'Service image 7',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_7',
                'priority' => 21,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_7', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_7', array(
            'label' => __('Feature-7 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_7',
            'priority' => 22,
        ));
        $wp_customize->add_setting('magista_features_description_7', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_7', array(
            'label' => __('Feature-7 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_7',
            'priority' => 23,
        )));
        $wp_customize->add_setting('magista_features_image_8');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_features_image_8', array(
                'label' => 'Service image 8',
                'section' => 'magista_features',
                'settings' => 'magista_features_image_8',
                'priority' => 24,
                )
            )
        );
        $wp_customize->add_setting('magista_features_title_8', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_features_title_8', array(
            'label' => __('Feature-8 Title', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_title_8',
            'priority' => 25,
        ));
        $wp_customize->add_setting('magista_features_description_8', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_features_description_8', array(
            'label' => __('Feature-8 Description', 'magista'),
            'section' => 'magista_features',
            'settings' => 'magista_features_description_8',
            'priority' => 26,
        )));
        //new section team
        $wp_customize->add_section('magista_team', array(
            'title' => __('Team Settings', 'magista'),
            'priority' => 15,
        ));
        $wp_customize->add_setting('magista_team_check', array(
            'sanitize_callback' => 'magista_sanitize_checkbox',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_check', array(
            'label' => __('Show Team on your Front Page', 'magista'),
            'section' => 'magista_team',
            'settings' => 'magista_team_check',
            'priority' => 1,
            'type'=>'checkbox',
        ));
        $wp_customize->add_setting('magista_team_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_team',
            'settings' => 'magista_team_title',
            'priority' => 2,
        ));
        //new section team1
        $wp_customize->add_section('magista_team1', array(
            'title' => __('Team Member 1', 'magista'),
            'priority' => 16,
        ));
        $wp_customize->add_setting('magista_team_image_1');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_team_image_1', array(
                'label' => 'Team Member 1',
            'section' => 'magista_team1',
            'settings' => 'magista_team_image_1',
            'priority' => 2,
            )
            )
        );
        $wp_customize->add_setting('magista_team_title_1', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_title_1', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_team1',
            'settings' => 'magista_team_title_1',
            'priority' => 3,
        ));
        $wp_customize->add_setting('magista_team_description_1', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_team_description_1', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_team1',
            'settings' => 'magista_team_description_1',
            'priority' => 4,
        )));
        $wp_customize->add_setting('magista_team_1_fb', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_1_fb', array(
            'label' => __('Facebook Link', 'magista'),
            'section' => 'magista_team1',
            'settings' => 'magista_team_1_fb',
            'priority' => 5,
        ));
        $wp_customize->add_setting('magista_team_1_tw', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_1_tw', array(
            'label' => __('Twitter Link', 'magista'),
            'section' => 'magista_team1',
            'settings' => 'magista_team_1_tw',
            'priority' => 6,
        ));
        $wp_customize->add_setting('magista_team_1_ln', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_1_ln', array(
            'label' => __('LinkedIn Link', 'magista'),
            'section' => 'magista_team1',
            'settings' => 'magista_team_1_ln',
            'priority' => 7,
        ));
        $wp_customize->add_setting('magista_team_1_gp', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_1_gp', array(
            'label' => __('Google+ Link', 'magista'),
            'section' => 'magista_team1',
            'settings' => 'magista_team_1_gp',
            'priority' => 8,
        ));
        //new section team2
        $wp_customize->add_section('magista_team2', array(
            'title' => __('Team Member 2', 'magista'),
            'priority' => 17,
        ));
        $wp_customize->add_setting('magista_team_image_2');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_team_image_2', array(
                'label' => 'Team Member 2',
            'section' => 'magista_team2',
            'settings' => 'magista_team_image_2',
            'priority' => 1,
            )
            )
        );
        $wp_customize->add_setting('magista_team_title_2', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_title_2', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_team2',
            'settings' => 'magista_team_title_2',
            'priority' => 2,
        ));
        $wp_customize->add_setting('magista_team_description_2', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_team_description_2', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_team2',
            'settings' => 'magista_team_description_2',
            'priority' => 3,
        )));
        $wp_customize->add_setting('magista_team_2_fb', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_2_fb', array(
            'label' => __('Facebook Link', 'magista'),
            'section' => 'magista_team2',
            'settings' => 'magista_team_2_fb',
            'priority' => 4,
        ));
        $wp_customize->add_setting('magista_team_2_tw', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_2_tw', array(
            'label' => __('Twitter Link', 'magista'),
            'section' => 'magista_team2',
            'settings' => 'magista_team_2_tw',
            'priority' => 5,
        ));
        $wp_customize->add_setting('magista_team_2_ln', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_2_ln', array(
            'label' => __('LinkedIn Link', 'magista'),
            'section' => 'magista_team2',
            'settings' => 'magista_team_2_ln',
            'priority' => 7,
        ));
        $wp_customize->add_setting('magista_team_2_gp', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_team_2_gp', array(
            'label' => __('Google+ Link', 'magista'),
            'section' => 'magista_team2',
            'settings' => 'magista_team_2_gp',
            'priority' => 8,
        ));
//        //new section team3
//        $wp_customize->add_section('magista_team3', array(
//            'title' => __('Team Member 3', 'magista'),
//            'priority' => 18,
//        ));
//        $wp_customize->add_setting('magista_team_image_3');
//
//        $wp_customize->add_control(
//            new WP_Customize_Image_Control(
//            $wp_customize, 'magista_team_image_3', array(
//                'label' => 'Team Member 3',
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_image_3',
//            'priority' => 2,
//            )
//            )
//        );
//        $wp_customize->add_setting('magista_team_title_3', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_title_3', array(
//            'label' => __('Title', 'magista'),
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_title_3',
//            'priority' => 3,
//        ));
//        $wp_customize->add_setting('magista_team_description_3', array('default' => '',
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_team_description_3', array(
//            'label' => __('Description', 'magista'),
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_description_3',
//            'priority' => 4,
//        )));
//        $wp_customize->add_setting('magista_team_3_fb', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_3_fb', array(
//            'label' => __('Facebook Link', 'magista'),
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_3_fb',
//            'priority' => 5,
//        ));
//        $wp_customize->add_setting('magista_team_3_tw', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_3_tw', array(
//            'label' => __('Twitter Link', 'magista'),
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_3_tw',
//            'priority' => 6,
//        ));
//        $wp_customize->add_setting('magista_team_3_ln', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_3_ln', array(
//            'label' => __('LinkedIn Link', 'magista'),
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_3_ln',
//            'priority' => 7,
//        ));
//        $wp_customize->add_setting('magista_team_3_gp', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_3_gp', array(
//            'label' => __('Google+ Link', 'magista'),
//            'section' => 'magista_team3',
//            'settings' => 'magista_team_3_gp',
//            'priority' => 8,
//        ));
//        //new section team4
//        $wp_customize->add_section('magista_team4', array(
//            'title' => __('Team Member 4', 'magista'),
//            'priority' => 19,
//        ));
//        $wp_customize->add_setting('magista_team_image_4');
//
//        $wp_customize->add_control(
//            new WP_Customize_Image_Control(
//            $wp_customize, 'magista_team_image_4', array(
//                'label' => 'Team Member 4',
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_image_4',
//            'priority' => 2,
//            )
//            )
//        );
//        $wp_customize->add_setting('magista_team_title_4', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_title_4', array(
//            'label' => __('Title', 'magista'),
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_title_4',
//            'priority' => 3,
//        ));
//        $wp_customize->add_setting('magista_team_description_4', array('default' => '',
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_team_description_4', array(
//            'label' => __('Description', 'magista'),
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_description_4',
//            'priority' => 4,
//        )));
//        $wp_customize->add_setting('magista_team_4_fb', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_4_fb', array(
//            'label' => __('Facebook Link', 'magista'),
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_4_fb',
//            'priority' => 5,
//        ));
//        $wp_customize->add_setting('magista_team_4_tw', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_4_tw', array(
//            'label' => __('Twitter Link', 'magista'),
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_4_tw',
//            'priority' => 6,
//        ));
//        $wp_customize->add_setting('magista_team_4_ln', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_4_ln', array(
//            'label' => __('LinkedIn Link', 'magista'),
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_4_ln',
//            'priority' => 7,
//        ));
//        $wp_customize->add_setting('magista_team_4_gp', array(
//            'sanitize_callback' => 'sanitize_text_field',
//            'transport' => 'postMessage',
//        ));
//
//        $wp_customize->add_control('magista_team_4_gp', array(
//            'label' => __('Google+ Link', 'magista'),
//            'section' => 'magista_team4',
//            'settings' => 'magista_team_4_gp',
//            'priority' => 8,
//        ));
        //new section testimonial
        $wp_customize->add_section('magista_test', array(
            'title' => __('Testimonial Settings', 'magista'),
            'priority' => 20,
        ));
        $wp_customize->add_setting('magista_test_check', array(
            'sanitize_callback' => 'magista_sanitize_checkbox',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_check', array(
            'label' => __('Show Testimonial on your Front Page', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_check',
            'priority' => 1,
            'type'=>'checkbox',
        ));
        $wp_customize->add_setting('magista_test_bcg_image');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_test_bcg_image', array(
                'label' => 'Testimonial Background Image',
            'section' => 'magista_test',
            'settings' => 'magista_test_bcg_image',
            'priority' => 2,
            )
            )
        );
        $wp_customize->add_setting('magista_test_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_title',
            'priority' => 3,
        ));
        $wp_customize->add_setting('magista_test_image_1');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_test_image_1', array(
                'label' => 'Testimonial Image 1',
            'section' => 'magista_test',
            'settings' => 'magista_test_image_1',
            'priority' => 4,
            )
            )
        );
        $wp_customize->add_setting('magista_test_description_1', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_test_description_1', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_description_1',
            'priority' => 5,
        )));
        $wp_customize->add_setting('magista_test_by1', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_by1', array(
            'label' => __('By', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_by1',
            'priority' => 6,
        ));
        $wp_customize->add_setting('magista_test_des1', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_des1', array(
            'label' => __('Designation', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_des1',
            'priority' => 7,
        ));
        $wp_customize->add_setting('magista_test_image_2');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_test_image_2', array(
                'label' => 'Testimonial Image 2',
            'section' => 'magista_test',
            'settings' => 'magista_test_image_2',
            'priority' => 8,
            )
            )
        );
        $wp_customize->add_setting('magista_test_description_2', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_test_description_2', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_description_2',
            'priority' => 9,
        )));
        $wp_customize->add_setting('magista_test_by2', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_by2', array(
            'label' => __('By', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_by2',
            'priority' => 10,
        ));
        $wp_customize->add_setting('magista_test_des2', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_des2', array(
            'label' => __('Designation', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_des2',
            'priority' => 11,
        ));
        $wp_customize->add_setting('magista_test_image_3');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'magista_test_image_3', array(
                'label' => 'Testimonial Image 3',
            'section' => 'magista_test',
            'settings' => 'magista_test_image_3',
            'priority' => 12,
            )
            )
        );
        $wp_customize->add_setting('magista_test_description_3', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new magista_customize_textarea_control($wp_customize, 'magista_test_description_3', array(
            'label' => __('Description', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_description_3',
            'priority' => 13,
        )));
        $wp_customize->add_setting('magista_test_by3', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_by3', array(
            'label' => __('By', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_by3',
            'priority' => 14,
        ));
        $wp_customize->add_setting('magista_test_des3', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_test_des3', array(
            'label' => __('Designation', 'magista'),
            'section' => 'magista_test',
            'settings' => 'magista_test_des3',
            'priority' => 15,
        ));
        //new section gallery
        $wp_customize->add_section('magista_gallery', array(
            'title' => __('Gallery Settings', 'magista'),
            'priority' => 21,
        ));
        $wp_customize->add_setting('magista_gallery_check', array(
            'sanitize_callback' => 'magista_sanitize_checkbox',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_gallery_check', array(
            'label' => __('Show Gallery on your Front Page', 'magista'),
            'section' => 'magista_gallery',
            'settings' => 'magista_gallery_check',
            'priority' => 1,
            'type'=>'checkbox',
        ));
        $wp_customize->add_setting('magista_gallery_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_gallery_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_gallery',
            'settings' => 'magista_gallery_title',
            'priority' => 2,
        ));
        $wp_customize->add_setting('magista_gallery_shortcode', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_gallery_shortcode', array(
            'label' => __('Enter Shortcode of your gallery', 'magista'),
            'section' => 'magista_gallery',
            'settings' => 'magista_gallery_shortcode',
            'priority' => 3,
        ));
        //new section blog
        $wp_customize->add_section('magista_blog', array(
            'title' => __('Blog Settings', 'magista'),
            'priority' => 22,
        ));
        $wp_customize->add_setting('magista_blog_check', array(
            'sanitize_callback' => 'magista_sanitize_checkbox',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_blog_check', array(
            'label' => __('Show Blog Posts on your Front Page', 'magista'),
            'section' => 'magista_blog',
            'settings' => 'magista_blog_check',
            'priority' => 1,
            'type'=>'checkbox',
        ));
        $wp_customize->add_setting('magista_blog_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_blog_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_blog',
            'settings' => 'magista_blog_title',
            'priority' => 2,
        ));
        //new section contact form
        $wp_customize->add_section('magista_contact', array(
            'title' => __('Contact Form Settings', 'magista'),
            'priority' => 23,
        ));
        $wp_customize->add_setting('magista_contact_check', array(
            'sanitize_callback' => 'magista_sanitize_checkbox',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_contact_check', array(
            'label' => __('Show Contact Form on your Front Page', 'magista'),
            'section' => 'magista_contact',
            'settings' => 'magista_contact_check',
            'priority' => 1,
            'type'=>'checkbox',
        ));
        $wp_customize->add_setting('magista_contact_title', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_contact_title', array(
            'label' => __('Title', 'magista'),
            'section' => 'magista_contact',
            'settings' => 'magista_contact_title',
            'priority' => 2,
        ));
        $wp_customize->add_setting('magista_contact_shortcode', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('magista_contact_shortcode', array(
            'label' => __('Enter Shortcode of your contact form', 'magista'),
            'section' => 'magista_contact',
            'settings' => 'magista_contact_shortcode',
            'priority' => 3,
        ));
}
add_action( 'customize_register', 'magista_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function magista_sanitize_checkbox($input){
    if($input)
        $output='1';
    else
        $output=false;
    return $output;
}
function magista_sanitize_escaping($input){
    $input=esc_attr($input);
    return $input;
}
function magista_parallax_image(){
    $bcg_image=get_theme_mod('magista_test_bcg_image');
     if(get_theme_mod('magista_test_bcg_image')) { ?>
<style type="text/css" id="background-image-css">
    
    .magista_testimonial{
        background:url("<?php echo $bcg_image; ?>") no-repeat fixed;
    }
    
</style>
<?php } 
}
add_action('wp_head','magista_parallax_image');


function magista_customize_preview_js() {
	wp_enqueue_script( 'magista_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), rand(), true );
}
add_action( 'customize_preview_init', 'magista_customize_preview_js' );