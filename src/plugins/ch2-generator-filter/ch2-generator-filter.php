<?php
/*
Plugin Name: Chapter 2 - Modify Contents of Generator Meta Tag
Plugin URI: https://github.com/dennislwm/wpcode
Description: Implement your first filter callback function to modify the contents of the generator meta tag that is output as part of the site header.
Version: 1.0
Author: Yannick Lefebvre
Author URI: http://ylefebvre.ca
License: GPLv2
*/

//
//  Web service to retrieve a website's favicon
//    URL: http://getfavicon.org

add_filter( 'the_generator', 'ch2gf_generator_filter', 10, 2 );

function ch2gf_generator_filter ( $html, $type ) {
  if ( $type == 'xhtml' ) {
      $html = preg_replace( '("WordPress.*?")',
                            '"Yannick Lefebvre"', $html );
  }
  return $html;
}