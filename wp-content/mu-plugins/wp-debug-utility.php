<?php

/**
 * Plugin Name: WP Debug Utility
 * Plugin URI: https://github.com/ppfeufer/wp-debug-utiliy
 * Git URI: https://github.com/ppfeufer/wp-debug-utiliy
 * Description: A little debug helper ...
 * Version: 0.0.1
 * Author: Peter Pfeufer
 * Author URI: https://ppfeufer.de
 * Text Domain: wp-debug-utility
 * Domain Path: /l10n
 */

/*
 * Copyright (C) 2018 p.pfeufer
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Include the autoloader so we can dynamically include the rest of the classes.
require_once(\trailingslashit(\dirname(__FILE__)) . 'wp-debug-utility/inc/autoloader.php');
