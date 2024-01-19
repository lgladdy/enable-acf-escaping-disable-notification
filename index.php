<?php
/**
 * Plugin Name:       ACF Enable Escaping & Disable Notification Plugin
 * Plugin URI:        https://github.com/lgladdy/enable-acf-escaping-disable-notification
 * Description:       This plugin will force-enable the new escaping behaviour of `the_field` and `the_sub_field` early, and turn off the notification. Ideal for testing your sites.
 * Version:           1.0.0
 * Author:            Liam Gladdy
 */

add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );
add_filter( 'acf/the_field/escape_html_optin', '__return_true' );

