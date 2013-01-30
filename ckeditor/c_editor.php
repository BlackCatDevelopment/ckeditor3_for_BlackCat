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
 *   @package         ckeditor4
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

require sanitize_path(realpath(dirname(__FILE__).'/../wysiwyg_admin/c_editor_base.php'));

final class c_editor extends c_editor_base
{
    protected static $default_skin = 'kama';

    public function getSkinPath()
    {
        return sanitize_path(realpath(dirname(__FILE__).'/ckeditor/skins'));
    }

    public function getToolbars()
    {
        return array('Full','Smart','Simple');
    }

    public function getAdditionalSettings()
    {
        return array(
            array( 'name' => 'autoParagraph', 'type' => 'boolean', 'default' => 'false' ),
            array( 'name' => 'autoGrow_minHeight', 'type' => 'text', 'default' => 200 ),
            array( 'name' => 'autoGrow_maxHeight', 'type' => 'text', 'default' => 400 ),
            array( 'name' => 'contentsCss', 'type' => 'text', 'default' => 'editor.css' ),
        );
    }
}

?>