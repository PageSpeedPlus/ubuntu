#!/bin/bash
# ===================================================================================
# | EasyEngine NGiNX - Konfiguration
# ===================================================================================
# Script: nginx.sh
# Version: 1.0.0
# Date: 2018-05-27
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: EasyEngine NGiNX konfigurieren.
#------------------------------------------------------------------------------------
# 1. Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/nginx.sh.log
SYSTEMMAILRECIPIENT=danibieli.1185@gmail.com
#------------------------------------------------------------------------------------
# 2. Standart Variabeln
#------------------------------------------------------------------------------------
RED='\033[0;31m'
GREEN='\033[0;32m'
NC='\033[0m'
PWD=$(pwd);
exec > >(tee -i $LOGFILE)
exec 2>&1
#------------------------------------------------------------------------------------
# 3. Root Check
#------------------------------------------------------------------------------------
if [ "$(id -u)" != "0" ]; then
    echo "Error: You must be root to run this script, please use the root user to install the software."
    exit 1
fi
clear
#------------------------------------------------------------------------------------
# 4. NGiNX konfigurieren
#------------------------------------------------------------------------------------
# Geo IP
mkdir -p /usr/share/GeoIP
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz
gunzip GeoIP.dat.gz
mv GeoIP.dat /usr/share/GeoIP/GeoIP.dat
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz
gunzip GeoLiteCity.dat.gz
mv GeoLiteCity.dat /usr/share/GeoIP/GeoIPCity.dat
wget -O /home/tools/nginx-geoip-update.sh https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/home/tools/nginx-geoip-update.sh
chmod 700 /home/tools/nginx-geoip-update.sh
# /etc/nginx/nginx.conf
wget -O /etc/nginx/nginx.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/nginx/nginx.conf
wget -O /etc/nginx/mime.types https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/mime.types
# /etc/nginx/sites-available/
wget -O /etc/nginx/sites-available/default https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/sites-available/default-7
wget -O /etc/nginx/sites-available/default-72 https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/sites-available/default-72
wget -O /etc/nginx/sites-available/22222 https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/sites-available/22222-7
wget -O /etc/nginx/sites-available/22222-72 https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/sites-available/22222-72
# /etc/nginx/conf.d/
wget -O /etc/nginx/conf.d/blockips.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/conf.d/blockips.conf
wget -O /etc/nginx/conf.d/cloudflare.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/conf.d/cloudflare.conf
wget -O /etc/nginx/conf.d/fastcgi.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/conf.d/fastcgi.conf
wget -O /etc/nginx/conf.d/pagespeed.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/conf.d/pagespeed.conf
wget -O /etc/nginx/conf.d/redis.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/conf.d/redis.conf
wget -O /etc/nginx/conf.d/upstream.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/conf.d/upstream-7-72.conf
wget -O /etc/nginx/conf.d/webp.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/nginx/conf.d/webp.conf
# /etc/nginx/common/
wget -O /etc/nginx/common/cache-enabler.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/cache-enabler.conf
wget -O /etc/nginx/common/locations-php7.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/locations-php7.conf
wget -O /etc/nginx/common/locations-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/locations-php72.conf
wget -O /etc/nginx/common/ocsp.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/ocsp.conf
wget -O /etc/nginx/common/pagespeed-vhost.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/pagespeed-vhost.conf
wget -O /etc/nginx/common/php7.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/php7.conf
wget -O /etc/nginx/common/php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/php72.conf
wget -O /etc/nginx/common/redis-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/redis-php72.conf
wget -O /etc/nginx/common/w3tc-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/w3tc-php72.conf
wget -O /etc/nginx/common/wcws-php7.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/wcws-php7.conf
wget -O /etc/nginx/common/wcws-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/wcws-php72.conf
wget -O /etc/nginx/common/wpcommon-php7.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/wpcommon-php7.conf
wget -O /etc/nginx/common/wpcommon-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/wpcommon-php72.conf
wget -O /etc/nginx/common/wpfc-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/wpfc-php72.conf
wget -O /etc/nginx/common/wpsc-php72.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/nginx/common/wpsc-php72.conf
#------------------------------------------------------------------------------------
# 5. PHP 7.0
#------------------------------------------------------------------------------------
wget -O /etc/php/7.0/cli/php.ini https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/php/7.0/cli/php.ini
wget -O /etc/php/7.0/fpm/php.ini https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/php/7.0/fpm/php.ini
systemctl restart php7.0-fpm
#------------------------------------------------------------------------------------
# 6. PHP 7.2
#------------------------------------------------------------------------------------
apt-get update && apt-get -y install php7.2-fpm php7.2-bcmath php7.2-bz2 php7.2-cli php7.2-common php7.2-curl php7.2-gd php7.2-intl php7.2-json php7.2-mbstring php7.2-mysql php7.2-opcache php7.2-soap php7.2-tidy php7.2-xml php7.2-zip
wget -O /etc/php/7.2/fpm/php.ini https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/php/7.2/fpm/php.ini
wget -O /etc/php/7.2/fpm/pool.d/www.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/php/7.2/fpm/pool.d/www.conf
systemctl restart php7.2-fpm
#------------------------------------------------------------------------------------
# 7. NGiNX neu laden
#------------------------------------------------------------------------------------
systemctl restart nginx
#------------------------------------------------------------------------------------
# www-data als ssh user nutzen
#------------------------------------------------------------------------------------
usermod -s /bin/bash www-data
echo "root: $SYSTEMMAILRECIPIENT" >> /etc/aliases
newaliases
#------------------------------------------------------------------------------------
# Install Composer - Fix phpmyadmin install issue
#------------------------------------------------------------------------------------
cd ~/
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/bin/composer
sudo -u www-data composer update -d /var/www/22222/htdocs/db/pma/
#------------------------------------------------------------------------------------
# Install adminer-4.6.2
#------------------------------------------------------------------------------------
cd /var/www/22222/htdocs/db
rm /var/www/22222/htdocs/db/adminer/index.php
git clone https://github.com/natanfelles/adminer-bootstrap-like.git
mv /var/www/22222/htdocs/db/adminer-bootstrap-like/* /var/www/22222/htdocs/db/adminer/
rm -Rf /var/www/22222/htdocs/db/adminer-bootstrap-like
rm /var/www/22222/htdocs/db/adminer/adminer-4.6.2.php
wget -O /var/www/22222/htdocs/db/adminer/adminer-4.6.2.php https://www.adminer.org/latest-mysql-de.php
chown -R www-data:www-data /var/www/22222/htdocs
#------------------------------------------------------------------------------------
# Install extplorer
#------------------------------------------------------------------------------------
mkdir /var/www/22222/htdocs/files
wget http://extplorer.net/attachments/download/74/eXtplorer_2.1.10.zip -O /var/www/22222/htdocs/files/ex.zip
cd /var/www/22222/htdocs/files && unzip ex.zip && rm ex.zip
#------------------------------------------------------------------------------------
# Install adminer-editor
#------------------------------------------------------------------------------------
mkdir /var/www/22222/htdocs/db/adminer-editor
wget -O /var/www/22222/htdocs/db/adminer-editor/index.php https://github.com/vrana/adminer/releases/download/v4.6.2/editor-4.6.2-mysql-de.php
chown -R www-data:www-data /var/www/22222/htdocs
#------------------------------------------------------------------------------------
# Install ee-dashboard
#------------------------------------------------------------------------------------
cd ~/
git clone https://github.com/VirtuBox/easyengine-dashboard.git
cp -rf easyengine-dashboard/* /var/www/22222/htdocs/
chown -R www-data:www-data /var/www/22222/htdocs
