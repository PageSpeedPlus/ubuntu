#!/bin/bash
# ===================================================================================
# | Dateirechte für /var/wwww und /home/ee regelmässig korrigieren
# ===================================================================================
# Script: ownership.sh
# Version: 1.0.0
# Date: 2018-06-12
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: Für jedes neue Webverzeichnis mit nachfolgendem Befehl den Pfad zur wp-config.php an Skript senden.
# echo "chmod 400 /var/www/wpnginx.tk/wp-config.php" >> /home/ee/skripte/ownership.sh
#------------------------------------------------------------------------------------
chown -Rf ee /home/ee
chmod -R 750 /home/ee
chown -Rf www-data:www-data /var/www
find /var/www/ -type d -exec chmod 755 {} \;
find /var/www/ -type f -exec chmod 644 {} \;
