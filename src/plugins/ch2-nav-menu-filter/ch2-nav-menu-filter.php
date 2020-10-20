<?php
/*
Plugin Name: Chapter 2 - Nav Menu Filter
Plugin URI: https://github.com/dennislwm/wpcode
Description: Hide an item from the navigation menu for users who are not logged in to your site.
Version: 1.0
Author: Yannick Lefebvre
Author URI: http://ylefebvre.ca
License: GPLv2
*/

//
//  WP Plugin to collect debug messages and display them in the admin bar
//    URL: https://wordpress.org/plugins/debug-bar/
//  WP debugging features that can be activated
//    URL: https://codex.wordpress.org/Editing_wp-config.php#Save_queries_for_analysis

add_filter( 'wp_nav_menu_objects', 'ch2nmf_new_nav_menu_items', 10, 2 );

function ch2nmf_new_nav_menu_items( $sorted_menu_items, $args ) {
  // Check if used is logged in, continue if not logged
  if ( is_user_logged_in() == FALSE ) {
    // Loop through all menu items received
    // Place each item's key in $key variable
    foreach ( $sorted_menu_items as $key => $sorted_menu_item ) {
        // Check if menu item title matches search string
        if ( 'Private Area' == $sorted_menu_item->title ) {
            // Remove item from menu array if found using
            // item key
            unset( $sorted_menu_items[ $key ] );
        }
    }
  }
  return $sorted_menu_items;
}