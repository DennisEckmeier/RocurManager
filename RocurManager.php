<?php
/*
Plugin Name: Rocur Manager
Plugin URI:  https://github.com/DennisEckmeier/RocurManager
Description: Manage a twitter rotating curation account with wordpress!
Version:     0.0.1
Author:      Dennis DennisEckmeier
Year:        2018
Author URI:  http://www.eckmeier.de
Text Domain: wporg
Domain Path: /languages
License:     GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html

Rocur Manager is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Rocur Manager is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Rocur Manager. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Nothing to see, here. Move along. Move along.';
	exit;
}

// ACTIVATION
include_once dirname( __FILE__ ) . '/DETRM_activation.php';
register_activation_hook(__FILE__, 'detrm_activate');

// DEACTIVATION
register_deactivation_hook(plugin_dir_path(__FILE__) .'DETRM_deactivation.php', 'detrm_deactivate');

// ADD CURATOR MANAGEMENT PAGE TO MENU
function detrm_options_page()
{
    /*
    add_menu_page(
        string $page_title,
        string $menu_title,
        string $capability,
        string $menu_slug,
        callable $function = '',
        string $icon_url = '',
        int $position = null )
    */

    add_menu_page(
        'Manage Curators',
        'RocurManager',
        'read',
        plugin_dir_path(__FILE__) . 'admin/detrm_admin_TopLevel.php'
    );
}
add_action('admin_menu', 'detrm_options_page');

?>
