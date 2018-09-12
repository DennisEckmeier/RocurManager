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

register_activation_hook(RocurManager/DETRM_activation, 'detrm_activate');
//register_deactivation_hook('RocurManager/DETRM_deactivation', 'detrm_deactivate');


?>
