<?php
/*
Plugin Name: ScrollSeer
Plugin URI: https://github.com/brettfarrow/scrollseer
Description: See what they're really reading. Begin tracking what your users are actually consuming by tracking scroll depth in Google Analytics via WP Scroll Analytics.
Author: Brett Farrow
Version: 0.1.0
Author URI: http://acorncity.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 3
of the License, or any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

function scrollseer_enqueue_scripts() {
	if (is_admin()) return;
	
	wp_enqueue_script('scrollseer', plugins_url('jquery.scrolldepth.min.js',__FILE__), array('jquery'), '0.1.0', 'true');
}

add_action('init', 'scrollseer_enqueue_scripts');

?>