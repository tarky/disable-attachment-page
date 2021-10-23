<?php
/*
Plugin Name: Disable attachment page
Author: webfood
Plugin URI: http://webfood.info/
Description: Disable attachment page
Version: 0.1
Author URI: http://webfood.info/
Text Domain: Disable attachment page
Domain Path: /languages

License:
 Released under the GPL license
  http://www.gnu.org/copyleft/gpl.html

  Copyright 2021 (email : webfood.info@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'template_redirect', function () {
  if ( is_attachment() ) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
  }
});
