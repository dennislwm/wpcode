<?php
/*
Plugin Name: Add Document Type Styles New
Plugin URI: https://github.com/dennislwm/wpcode
Description: Simple plugin that adds icons to document links within WP. Includes support for PDF, DOC, MP3 and ZIP.
Version: 1.0
Author: dennislwm
Author URI: https://github.com/dennislwm
Text Doamin: add_doctype_styles_new
License: GNU General Public License v2 or later
*/

// this function does the magic
function doctype_styles_new_regex($text) {
  $text = preg_replace('/href=([\'|"][[:alnum:]|
    [:punct:]]*)\.(pdf|doc|mp3|zip)([\'|"])/',
    'href=\\1.\\2\\3 class="link \\2"', $text);
  return $text;
}

// this function adds the stylesheet to the head
function doctype_styles_new_styles() {
  wp_register_style('doctype_styles', plugins_url('doctype_styles_new.css', __FILE__));
  wp_enqueue_style('doctype_styles');
}

// HOOKS

add_filter('the_content', 'doctype_styles_new_regex', 9);
add_action('wp_enqueue_scripts', 'doctype_styles_new_styles');

// Good idea not to use the PHP closing tag