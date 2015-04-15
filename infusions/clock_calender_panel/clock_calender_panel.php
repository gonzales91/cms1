
<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2011 Nick Jones
| http://www.php-fusion-iran.com
+--------------------------------------------------------+
| Filename: clock_calender_panel.php 
| Author: © 20013 - 2014 behrouz atashpeykar
| http://www.php-fusion-iran.com
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }
if (file_exists(INFUSIONS."clock_calender_panel/locale/".$settings['locale'].".php")) {
	include INFUSIONS."clock_calender_panel/locale/".$settings['locale'].".php";
} else {
	include INFUSIONS."clock_calender_panel/locale/Persian.php";
}
openside($locale['clock_calender_001']);
echo "<table class='' cellpadding='0' cellspacing='0' style='width:100%'>\n";
echo "<tr>\n";


	echo "<embed src='".INFUSIONS."clock_calender_panel/clock_calender.swf' width='150px' height='150px' type='application/x-shockwave-flash' wmode='transparent' />\n";
echo "</tr>\n";
echo "</table>\n";
closeside();

?>