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

defined('MOODLE_INTERNAL') || die;

$functions = [
    'mod_board_get_board' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'get_board',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Get board column and post data',
        'type'          => 'read',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_board_history' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'board_history',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Get board history',
        'type'          => 'read',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_add_column' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'add_column',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Add a column on the board',
        'type'          => 'write',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_update_column' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'update_column',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Update a column on the board',
        'type'          => 'write',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_delete_column' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'delete_column',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Delete a column from the board',
        'type'          => 'write',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_add_note' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'add_note',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Add a note on the board',
        'type'          => 'write',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_update_note' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'update_note',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Update a note on the board',
        'type'          => 'write',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
    
    'mod_board_delete_note' => [
        'classname'     => 'mod_board_external',
        'methodname'    => 'delete_note',
        'classpath'     => 'mod/board/external.php',
        'description'   => 'Delete a note from the board',
        'type'          => 'write',
        'capabilities'  => '',
        'ajax'          => true,
        'loginrequired' => true,
    ],
];
