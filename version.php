<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * Configurable Reports - A Moodle block for creating customizable reports
 *
 * @package:    block_configurable_reports
 * @author:     Juan leyva <http://www.twitter.com/jleyvadelgado>
 * @author:     Harry Bleckert Harry@Bleckert.com from 2023 onwards
 * @date:       2013-09-07 onwards
 * @copyright   Juan leyva <http://www.twitter.com/jleyvadelgado>
 * @link        https://github.com/HarryBleckert/moodle-block_search_user
 * @license     https://gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2023082300;  // Plugin version.
$plugin->requires = 2021111300; // require Moodle version (4.0).
$plugin->maturity = MATURITY_BETA;
$plugin->release = 'v4.2.1';
$plugin->component = 'block_configurable_reports'; // Full name of the plugin (used for diagnostics)
$plugin->cron      = 86400; // = Once in 24h, Set min time between cron executions.
                            // Should probably be at night to off load CPU load.
