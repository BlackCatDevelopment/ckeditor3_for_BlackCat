<?php

/**
 *  @module         ckeditor
 *  @version        see info.php of this module
 *  @authors        Dietrich Roland Pehlke
 *  @copyright      2010-2012 Dietrich Roland Pehlke
 *  @license        GNU General Public License
 *  @license terms  see info.php of this module
 *  @platform       see info.php of this module
 *  @requirements   PHP 5.2.x and higher
 *  @version        $Id$
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

// delete obsolete plugins wbmodules and wbdroplets
if (file_exists(WB_PATH . '/modules/ckeditor/ckeditor/plugins/wbdroplets/plugin.js')) {
   rm_full_dir(WB_PATH . '/modules/ckeditor/ckeditor/plugins/wbdroplets');
}
if (file_exists(WB_PATH . '/modules/ckeditor/ckeditor/plugins/wblink/plugin.js')) {
   rm_full_dir(WB_PATH . '/modules/ckeditor/ckeditor/plugins/wblink');
} 
 
?>
