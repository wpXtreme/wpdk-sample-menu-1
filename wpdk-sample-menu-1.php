<?php

/**
 * Plugin Name:     WPDK Sample Menu #1
 * Plugin URI:      http://wpdk.io
 * Description:     Hello World! in WordPress menu of admin area with WPDK framework - basic usage
 * Version:         1.0.0
 * Author:          wpXtreme
 * Author URI:      https://wpxtre.me
 * Text Domain:     wpdk-sample-menu-1
 * Domain Path:     localization
 */

// Include WPDK framework - the root directory name of WPDK may be different.
// Please change the line below according to your environment.
//require_once( trailingslashit( dirname( dirname( __FILE__ ) ) ) . 'wpdk-production/wpdk.php' );
require_once( trailingslashit( dirname( dirname( __FILE__ ) ) ) . 'wpxtreme/wpdk/wpdk.php' );

// Hook a function to the WordPress action that generates the Hello World menu item in admin menu
add_action( 'admin_menu', 'wpdk_create_admin_menu' );

// This function creates the Hello World menu item in admin menu through WPDK
function wpdk_create_admin_menu()
{

  // Create the menu through WPDK
  $menu = new WPDKMenu( 'wpdk-sample-menu', __( 'Hello World!' ) );

  // Hook a function to the menu item ( note that WP sets the first menu item equal to the menu global string above )
  $menu->addSubMenu( __( 'First item' ), 'wpdk_display_hello_world' );

  // Display the menu
  $menu->render();

}

// This function does nothing more than displays Hello World! in admin area when plugin menu item is clicked in admin menu
function wpdk_display_hello_world()
{
  ?><h1>Hello World!<?php
}

