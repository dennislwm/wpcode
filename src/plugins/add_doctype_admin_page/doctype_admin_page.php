<?php
/*
Plugin Name: Add Document Type Admin Page
Plugin URI: https://github.com/dennislwm/wpcode
Description: Modified Add Document Type Styles New plugin to add a custom admin page. Allows support for additional document types.
Version: 1.0
Author: dennislwm
Author URI: https://github.com/dennislwm
Text Doamin: add_doctype_admin_page
License: GNU General Public License v2 or later
*/

// Does the magic
function doctype_admin_page_regex($text) {
  $types = get_option('doctype_styles_new_supportedtypes');
  $types = preg_replace('/,\s*/', '|', $types);

  $text = preg_replace('/href=([\'|"][[:alnum:]|
    [:punct:]]*)\.('.$types.')([\'|"])/i', 'href=\\1.\\2\\3
    class="link \\2"', $text);
  return $text;
}

// Adds the stylesheet to the head
function doctype_admin_page_styles() {
  wp_register_style('doctype_styles', plugins_url('doctype_admin_page.css', __FILE__));
  wp_enqueue_style('doctype_styles');
}

// ADMIN PAGE

// Adds a new option when the plugin is activated
function set_supportedtypes_options() {
  add_option("doctype_styles_new_supportedtypes", "pdf,doc,mp3,zip");
}

// Removes the option when the plugin is deactivated
function unset_supportedtypes_options() {
  delete_option("doctype_styles_new_supportedtypes");
}

// Adds a new item to the WP Settings menu in wp-admin
function modify_menu_for_supportedtypes() {
  add_submenu_page(
    'options-general.php',
    'Document Type Styles',   //Page title
    'Document Type Styles',   //Menu title
    'manage_options',         //capability
    'add_doctype_admin_page', //slug
    'supportedtypes_options'  //callback function
  );
}

// Display our admin page
function supportedtype_options() {
  echo '<div class="wrap"><h2>Supported Document Types</h2>';
  if (isset($_POST['submit'])) {
    update_supportedtypes_options();
  }
  print_supportedtypes_form();
  echo '</div>';
}

// Update options if user clicks on the submit button
function update_supportedtypes_options() {
  $updated = false;
  if ($_POST['doctype_styles_new_supportedtypes']) {
    $safe_val = addslashes(strip_tags($_POST['doctype_styles_new_supportedtypes']));
    update_option('doctype_styles_new_supportedtypes', $safe_val);
    $updated = true;
  }

  if ($updated) {
    echo '<div id="message" class="updated fade">';
    echo '<p>Supported types successfully updated!</p>';
    echo '</div>';
  } else {
    echo '<div id="message" class="error fade">';
    echo '<p>Unable to update supported types!</p>';
    echo '</div>';
  }
}

// Print the form that the users will see. Make sure there are no spaces before or after the closing tag (EOF;).
function print_supportedtypes_form() {
  $val_doctype_styles_new_supportedtypes = stripslashes(get_option('doctype_style_new_supportedtypes'));
  echo <<<EOF
<p>Document types supported by the Add Document Type Styles New
plugin are listed below.<br />To add a new type to be linked, take
the following steps, in this order:
<ol>
  <li>Upload the icon file for the new doctype to <i>wp-
      content/plugins/add_doctype_styles_new/</i></li>
  <li>Add a line for the new doctype to the stylesheet at
      <i>wp-content/plugins/add_doctype_styles_new/
      doctype_styles_new.css</i></li>
  <li>Add the extension of the new doctype to the list
      below, keeping with the comma-separated format.</li>
</ol>
</p>
<form method="post">
  <input type="text" name="doctype_styles_new_supportedtypes" size="50"
  value="$val_doctype_styles_new_supportedtypes" />
  <input type="submit" name="submit" value="Save Changes" />
</form>
EOF;
}

// HOOKS

add_filter('the_content', 'doctype_admin_page_regex', 9);
add_action('wp_enqueue_scripts', 'doctype_admin_page_styles');

add_action('admin_menu', 'modify_menu_for_supportedtypes');
register_activation_hook(__FILE__, "set_supportedtypes_options");
register_deactivation_hook(__FILE__, "unset_supportedtypes_options");

// Good idea not to use the PHP closing tag