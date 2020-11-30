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
 * Definition of core scheduled tasks.
 *
 * The handlers defined on this file are processed and registered into
 * the Moodle DB after any install or upgrade operation. All plugins
 * support this.
 *
 * @package   
 * @author    Chasnikov Andrew
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$tasks = [
    [    
        'classname' => 'local_unenroll_suspend_users\task\unenroll_suspend_users',
        'blocking' => 0,
        'minute' => '10',
        'hour' => '19',
        'day' => '*',
        'dayofweek' => '*',
        'month' => '*'   
    ],
];