<?php

/**
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 3 of the License, or (at
 *   your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful, but
 *   WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 *   General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program; if not, see <http://www.gnu.org/licenses/>.
 *
 *   @author          LEPTON v2.0 Black Cat Edition Development
 *   @copyright       2013, LEPTON v2.0 Black Cat Edition Development
 *   @link            http://www.lepton2.org
 *   @license         http://www.gnu.org/licenses/gpl.html
 *   @category        LEPTON2BCE_Modules
 *   @package         ckeditor
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {
	include(WB_PATH.'/framework/class.secure.php');
} else {
	$root = "../";
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= "../";
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) {
		include($root.'/framework/class.secure.php');
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php

if ( !defined('LEPTON_PATH')) die(header('Location: ../../index.php'));

$LANG = array(
    'Choose a DropLep' => 'DropLep wählen',
    'Available DropLeps' => 'Verfügbare DropLeps',
    'Comment' => 'Kommentar',
    'autoParagraph' => 'Bestimmt, ob Inline-Inhalte innerhalb des Body in Blöcke eingefaßt werden.',
    'autoGrow_minHeight' => 'Minimale Höhe des Eingabebereichs bei Verwendung von autoGrow',
    'autoGrow_maxHeight' => 'Maximale Höhe des Eingabebereichs bei Verwendung von autoGrow',
    'contentsCss' => 'CSS Datei(en) für das Styling der Editorinhalte. Diese sollte(n) zum Frontend-Template passen. Mehrere Dateien mit Komma separieren.',
);