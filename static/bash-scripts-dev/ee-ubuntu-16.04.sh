#!/bin/bash
# ===================================================================================
# | EasyEngine Ubuntu 16.04 - Installation & Konfiguration
# ===================================================================================
# Script: ee-ubuntu-16.04.sh
# Version: 1.0.0
# Date: 2018-05-11
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: EasyEngine auf Ubuntu 16.04 installieren und konfigurieren.
#------------------------------------------------------------------------------------
# 1. Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/ee-ubuntu-16.04.sh.log
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
# 4. Ubuntu 16.04 - Grundkonfiguration
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/bash/ubuntu-16.04.sh)
#------------------------------------------------------------------------------------
# 5. UFW Firewall einrichten & Cloudflare IPs whitelisten
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/bash/ufw.sh)
#------------------------------------------------------------------------------------
# 6. Syntax Highlighten im nano Editor
#------------------------------------------------------------------------------------
wget https://raw.githubusercontent.com/scopatz/nanorc/master/install.sh -O- | sh
#------------------------------------------------------------------------------------
# 7. MariaDB 10.2 installieren
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/bash/mariadb.sh)
#------------------------------------------------------------------------------------
# 8. EasyEngine installieren
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/bash/easyengine.sh)
#------------------------------------------------------------------------------------
# 9. NGiNX kompilieren
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/VirtuBox/nginx-ee/master/nginx-build.sh)
#------------------------------------------------------------------------------------
# 10. NGiNX konfigurieren
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/bash/nginx.sh)
#------------------------------------------------------------------------------------
# 11. Fail2Ban
#------------------------------------------------------------------------------------
wget -O /etc/fail2ban/filter.d/ddos.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/fail2ban/filter.d/ddos.conf
wget -O /etc/fail2ban/filter.d/ee-wordpress.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/fail2ban/filter.d/ee-wordpress.conf
wget -O /etc/fail2ban/jail.d/custom.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/fail2ban/jail.d/custom.conf
wget -O  /etc/fail2ban/jail.d/ddos.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/fail2ban/jail.d/ddos.conf
fail2ban-client reload
#------------------------------------------------------------------------------------
# 12. Monit
#------------------------------------------------------------------------------------
bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/bash/monit.sh)
#------------------------------------------------------------------------------------
Acme.sh - ee-acme-sh - https://github.com/VirtuBox/ee-acme-sh
#------------------------------------------------------------------------------------
cd && bash <(wget --no-check-certificate -O - https://raw.githubusercontent.com/VirtuBox/ee-acme-sh/master/install.sh)
source .bashrc
#------------------------------------------------------------------------------------
# PHP 7.1
#------------------------------------------------------------------------------------
apt-get -qq update && apt-get -yqq install php7.1-fpm php7.1-cli php7.1-zip php7.1-opcache php7.1-mysql php7.1-mcrypt php7.1-mbstring php7.1-json php7.1-intl php7.1-gd php7.1-curl php7.1-bz2 php7.1-xml php7.1-tidy php7.1-soap php7.1-bcmath > /dev/null 2>&1
wget -O /etc/php/7.1/fpm/php.ini https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/php/7.1/fpm/php.ini
wget -O /etc/php/7.1/fpm/pool.d/www.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/php/7.1/fpm/pool.d/www.conf
service php7.1-fpm restart > /dev/null 2>&1

wget -O /etc/nginx/common/wpcommon-php71.conf https://raw.githubusercontent.com/VirtuBox/ubuntu-nginx-web-server/master/etc/nginx/common/wpcommon-php71.conf
service nginx reload
