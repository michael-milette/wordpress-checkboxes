<?php
/*
Plugin Name: Checkboxes
Plugin URI: https://tngconsulting.ca
Description: Adds a [yes] and [no] checkbox shortcode using FontAwesome 4.7.
Version: 1.0
Author: Michael Milette
Author URI: https://www.tngconsulting.ca/

Copyright 2021 TNG Consulting Inc.

This script is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This script is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/* Note: You will need to add the following CSS to your theme (theme must support Font Awesome 4.7):
   .icon-fa-check:before{content:"\f046"}
   .icon-fa-square-o:before{content:"\f096"}
 */

/* ----------------------------------------------------------------------------------------------------
 * Purpose: Adds a [yes] checkbox shortcode using FontAwesome 4.7.
 */
function checkboxyes_function() {
     return '<i aria-hidden="true" class="icon-fa-check" title="' . __('Yes') . '"></i><span class="sr-only">' . __('Yes') . '</span>';
}
add_shortcode('yes', 'checkboxyes_function');

/* ----------------------------------------------------------------------------------------------------
 * Purpose: Adds a [no] checkbox shortcode using FontAwesome 4.7.
 */
function checkboxno_function() {
     return '<i aria-hidden="true" class="icon-fa-square-o" title="' . __('No') . '"></i><span class="sr-only">' . __('No') . '</span>';
}
add_shortcode('no', 'checkboxno_function');

/* ----------------------------------------------------------------------------------------------------
 * Load styles.
 */
function checkboxes_load(){
  wp_enqueue_style( 'checkboxes', plugin_dir_url( __FILE__ ) . '/styles.css', false, '0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'checkboxes_load' );
