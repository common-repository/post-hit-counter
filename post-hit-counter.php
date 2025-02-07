<?php
/*
 * Plugin Name: Post Hit Counter
 * Version: 1.3.2
 * Plugin URI: https://wordpress.org/plugins/post-hit-counter/
 * Description: A counter to track how many times your posts are viewed.
 * Author: Hugh Lashbrooke
 * Author URI: https://hugh.blog/
 * Requires at least: 4.0
 * Tested up to: 5.0
 *
 * Text Domain: post-hit-counter
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-post-hit-counter.php' );
require_once( 'includes/class-post-hit-counter-settings.php' );

// Load libraries
require_once( 'includes/lib/class-post-hit-counter-admin-api.php' );

// Load widgets
require_once( 'includes/widgets/class-post-hit-counter-widget-most-viewed-posts.php');

/**
 * Returns the main instance of Post_Hit_Counter to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Post_Hit_Counter
 */
function Post_Hit_Counter () {
	$instance = Post_Hit_Counter::instance( __FILE__, '1.3.2' );

	if( is_null( $instance->settings ) ) {
		$instance->settings = Post_Hit_Counter_Settings::instance( $instance );
	}

	return $instance;
}

Post_Hit_Counter();
