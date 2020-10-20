<?php
/*
Plugin Name: Chapter 2 - Add Favicon Meta Tag
Plugin URI: https://github.com/dennislwm/wpcode
Description: Simple plugin that will add a favicon meta tag to a website's header, pointing to an image file located in the plugin directory.
Version: 1.0
Author: Yannick Lefebvre
Author URI: http://ylefebvre.ca
License: GPLv2
*/

//
//  Web service to retrieve a website's favicon
//    URL: http://getfavicon.org

add_action( 'wp_head', 'ch2_fi_page_header_output' );

function ch2fi_page_header_output() {
  $site_icon_url = get_site_icon_url();
  if ( !empty( $site_icon_url ) ) {
      wp_site_icon();
  } else {
      $icon_url = plugins_url( 'favicon.ico', __FILE__ );
  ?>
  <link rel="shortcut icon" href="<?php echo $icon_url; ?>" />
  <?php }
}