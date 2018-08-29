<?php
/**
 * @package NnikkaPlugin
 */
/*
Plugin Name: Nnikka Plugin
Plugin URI: http://nnikka.com
Description: This is my first custom plugin
Version: 1.0.0
Author: Nikoloz Kurashvili
Author URI: hhtp://nnikka.com
License: GPLv2 or later
Text Domain: nnikka-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// if ( ! defined( 'ABSPATH' ) ) {
//     die;
// }

// defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file' );

if ( ! function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

class NnikkaPlugin 
{
    function activate() {
        // generate a CPT
        // flush rewrite rules
    }

    function deactivate() {
        // flush rewrite rules
    }

    function uninstall() {
        // delete CPT
        // delete all data from DB
    }
}

if ( class_exists( 'NnikkaPlugin' ) ) {
    $nnikkaPlugin = new NnikkaPlugin();
}

// activation
register_activation_hook(__FILE__, array( $nnikkaPlugin, 'activate' ));

// deactivation
register_deactivation_hook(__FILE__, array( $nnikkaPlugin, 'deactivate' ));

// uninstall
