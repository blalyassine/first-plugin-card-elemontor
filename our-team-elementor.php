<?php

/**
 * Plugin Name: team Widgets Elementor
 * Description: Elementor custom widgets from team Widgets Elementor Web Apps.
 * Plugin URI: teamWidgetsElementoryassine_dotma
 * Version:     1.0.0
 * Author:      yassine_dotma
 * Author URI:  c
 * Text Domain: team-elementor-widget
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
    
/**
 * Register Widgets.
 *
 * Include widget file and register widget class.
 
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_team_custom_widgets( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/our-team-widget.php' );  // include the widget file

    $widgets_manager->register( new \Elementor_Team_Widget() );  // register the widget

}
add_action( 'elementor/widgets/register', 'register_team_custom_widgets' );

/*
 * Load profile card scripts and styles
 * @since v1.0.0
 */
if (!function_exists('team_widget_script')) {

    function team_widget_script() {
        wp_enqueue_style('bootstrap',plugins_url('assets/css/font-awesome.css',__FILE__));
    }
}
add_action('wp_enqueue_scripts','team_widget_script');