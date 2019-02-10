<?php
// Prepend the NinjaFirewall (Pro Edition) for php.wpnginx.tk:
if (strpos($_SERVER['SERVER_NAME'], 'php.wpnginx.tk') !== false) {
   // Add the full path to NinjaFirewall firewall.php:
   require('/var/www/php.wpnginx.tk/htdocs/ninjafirewallpro/firewall.php');


// Prepend the NinjaFirewall (WP Edition) for wpnginx.tk:
} elseif ( strpos($_SERVER['SCRIPT_FILENAME'], '/var/www/wpnginx.tk/htdocs') !== false ) {
   // Add the full path to NinjaFirewall firewall.php:
   require('/var/www/wpnginx.tk/htdocs/wp-content/plugins/ninjafirewall/lib/firewall.php');
