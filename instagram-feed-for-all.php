<?php
/**
 * Plugin Name: Instagram Feed for All
 * Plugin URI: https://github.com/MIGHTYminnow/instagram-feed-for-all
 * Description: Makes Instagram Feed accessible.
 * Version: 1.0.0
 * Author: MIGHTYminnow
 * Author URI: https://mightyminnow.com
 */

/**
 * Enqueue child theme styles and scripts.
 */
if ( defined( 'SBIVER' ) ) {
	if ( ! function_exists( 'ifa_enqueue_assets' ) ) {
		add_action( 'wp_enqueue_scripts', 'ifa_enqueue_assets' );
		function ifa_enqueue_assets() {
			wp_enqueue_script( 'instagram-feed-for-all', plugin_dir_url( __FILE__ ) . 'instagram-feed-for-all.js', array( 'jquery' ), '1.0.0', true );
		}
	}
}
