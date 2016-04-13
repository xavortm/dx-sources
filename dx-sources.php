<?php
/**
 * Plugin Name: DX Sources
 * Description: Easily add the sources for your articles in the end of a post and link them through dxs-<number> ID for fast reader's navigation.
 * Version: 1.1.0
 * Author: DevriX
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

// The main class for the plugin
require_once plugin_dir_path( __FILE__ ) . 'inc/admin.class.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/public.class.php';

// Initialize and run the primary DX_Sources class
function run_dx_sources() {

	if ( is_admin() ) {
		// Build the metaboxes for the single post view editor.
		$DX_Sources_Admin = new DX_Sources_Admin();
	} else {
		// Use the filters for printing the content to the frontend.
		$DX_Sources_Public = new DX_Sources_Public();
	}
}

// This is where the plugin starts working :)
run_dx_sources();
