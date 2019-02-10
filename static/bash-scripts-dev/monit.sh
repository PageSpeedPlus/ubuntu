#!/bin/bash
# ===================================================================================
# | Monit (EasyEngine)- Installation & Konfiguration
# ===================================================================================
# Script: monit.sh
# Version: 1.0.0
# Date: 2018-05-11
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: Monit installieren und konfigurieren.
#------------------------------------------------------------------------------------
# 1. Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/monit.sh.log
MONITUSER=monit
MONITPW=easyengine
MONITPORT=2812
MONITMAILSERVER=localhost
MONITMAILSENDER=monit@`hostname -f`
MONITMAILRECIPIENT=admin@yourmail.com
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
# 3. Monit installieren
#------------------------------------------------------------------------------------
apt-get -qq update && apt-get -yqq install monit > /dev/null 2>&1
#------------------------------------------------------------------------------------
# 4. Konfigurationsdatei für EasyEngine laden
#------------------------------------------------------------------------------------
wget -O /etc/monit/monitrc https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/monitrc

wget -O /etc/monit/templates/rootbin https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/templates/rootbin
wget -O /etc/monit/templates/rootrc https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/templates/rootrc
wget -O /etc/monit/templates/rootstrict https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/templates/rootstrict

wget -O /etc/monit/conf.d/fail2ban.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/fail2ban.conf
# wget -O /etc/monit/conf.d/cron.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/cron-2.conf
wget -O /etc/monit/conf.d/nginx.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/nginx-2.conf
wget -O /etc/monit/conf.d/mysql.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/mysql.conf
wget -O /etc/monit/conf.d/memcached.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/memcached-2.conf
wget -O /etc/monit/conf.d/openssh-server.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/openssh-server.conf
wget -O /etc/monit/conf.d/postfix.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/postfix-2.conf
wget -O /home/tools/foldersizecheck.sh https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/home/tools/foldersizecheck.sh
chmod +x /home/tools/foldersizecheck.sh
wget -O /etc/monit/conf.d/wordpressfoldersize.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/monit/conf.d/wordpressfoldersize.conf

openssl req -new -x509 -days 365 -nodes -out /var/certs/monit.pem -keyout /var/certs/monit.pem
chmod 0700 /var/certs/monit.pem
service monit reload
#------------------------------------------------------------------------------------
# 5. Monit starten
#------------------------------------------------------------------------------------
service monit start > /dev/null 2>&1
#------------------------------------------------------------------------------------
# 6. Monit URL anzeigen
#------------------------------------------------------------------------------------
printf "${RED}Das Monit Dashboard können Sie im Browser via http://%s:$MONITPORT aufrufen.${NC}\n" `hostname -f`
echo
#------------------------------------------------------------------------------------
# 7. Skript Ende & Logfile Pfad Ausgabe
#------------------------------------------------------------------------------------
echo -e "${GREEN}Monit Installation abgeschlossen - Logfile: $LOGFILE ${NC}\n"
