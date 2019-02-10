#!/bin/bash
# ===================================================================================
# | EasyEngine Fail2Ban - Konfiguration
# ===================================================================================
# Script: ee-fail2ban.sh
# Version: 1.1.0
# Date: 2018-06-09
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: EasyEngine Fail2Ban konfigurieren.
#------------------------------------------------------------------------------------
# | Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/ee-fail2ban.sh.log
#------------------------------------------------------------------------------------
# | Standart Variabeln
#------------------------------------------------------------------------------------
RED='\033[0;31m'
GREEN='\033[0;32m'
NC='\033[0m'
#------------------------------------------------------------------------------------
# | Root Check
#------------------------------------------------------------------------------------
if [ "$(id -u)" != "0" ]; then
    echo "${RED}Error: Sie müssen root sein, um dieses Skript auszuführen. ${NC}\n"
    exit 1
fi
clear
#------------------------------------------------------------------------------------
# Fail2Ban installieren
#------------------------------------------------------------------------------------
apt-get -y install fail2ban
#------------------------------------------------------------------------------------
# 5. Fail2Ban konfigurieren
#------------------------------------------------------------------------------------
wget -O /etc/fail2ban/jail.local https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/fail2ban/jail.local
wget -O /etc/fail2ban/fail2ban.local https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/fail2ban/fail2ban.local
wget -O /etc/fail2ban/filter.d/ee-wordpress.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/fail2ban/filter.d/ee-wordpress.conf
wget -O /etc/fail2ban/action.d/abuseipdb.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/fail2ban/action.d/abuseipdb.conf
rm /etc/fail2ban/action.d/cloudflare.conf
wget -O /etc/fail2ban/action.d/cloudflare.conf https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/fail2ban/action.d/cloudflare.conf
#------------------------------------------------------------------------------------
# 6. Fail2Ban neu laden
#------------------------------------------------------------------------------------
fail2ban-client reload
