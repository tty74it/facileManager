<?php
/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2013 The facileManager Team                               |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | facileManager: Easy System Administration                               |
 +-------------------------------------------------------------------------+
 | http://www.facilemanager.com/                                           |
 +-------------------------------------------------------------------------+
 | Common AJAX processing functions                                        |
 | Author: Jon LaBass                                                      |
 +-------------------------------------------------------------------------+
*/

/**
 * Displays an error
 *
 * @since 1.0
 * @package facileManager
 */
function returnError($window = true) {
	$msg = 'There was a problem with your request.'; 
	if ($window) {
		echo '<h2>Error</h2>' . "\n";
		echo '<p>' . $msg . "</p>\n";
		echo '<br /><input type="submit" value="OK" class="button" id="cancel_button" />' . "\n";
	} else {
		echo '<p class="error">' . $msg . "</p>\n";
	}
	exit;
}


/**
 * Displays unauthorized message
 *
 * @since 1.0
 * @package facileManager
 */
function returnUnAuth($window = true) {
	$msg = 'You are not authorized to make changes.';
	if ($window) {
		echo '<h2>Error</h2>' . "\n";
		echo '<p>' . $msg . "</p>\n";
		echo '<br /><input type="submit" value="OK" class="button cancel" id="cancel_button" />' . "\n";
	} else {
		echo '<p class="error">' . $msg . "</p>\n";
	}
	exit;
}

?>
