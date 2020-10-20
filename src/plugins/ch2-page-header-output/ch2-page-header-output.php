<?php
/*
Plugin Name: Chapter 2 - Page Header Output
Plugin URI: https://github.com/dennislwm/wpcode
Description: Register an action hook function to be able to add the Google Analytics page header JavaScript code
Version: 1.0
Author: Yannick Lefebvre
Author URI: http://ylefebvre.ca
License: GPLv2
*/

//
//  WP Codex of common action hooks
//    URL: https://codex.wordpress.org/Plugin_API/Action_Reference
//  Third-party documentation of hooks
//    URL: http://hookr.io

add_action( 'wp_head', 'ch2pho_page_header_output' );
add_filter( 'the_content', 'ch2lfa_link_filter_analytics' );
add_action( 'wp_footer', 'ch2lfa_footer_analytics_code' );

function ch2pho_page_header_output() { ?>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
      i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
      a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
      m.parentNode.insertBefore(a,m)})(window,document,'script',
      'https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-0000000-0', 'auto');
      ga('send', 'pageview');
  </script>
<?php }

function ch2lfa_link_filter_analytics ( $the_content ) {
  $new_content = str_replace( 'href',
      'onClick="recordOutboundLink( this );return false;" href'
      , $the_content );
  return $new_content;
}

function ch2lfa_footer_analytics_code() { ?>
  <script type="text/javascript">
      function recordOutboundLink( link ) {
          ga( 'send', 'event', 'Outbound Links', 'Click',
              link.href, {
                'transport': 'beacon',
                'hitCallback': function() {
                    document.location = link.href;
                }
            } );
        }
</script>
<?php }