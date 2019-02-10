#!/bin/bash
# ===================================================================================
# | UFW Firewall einrichten & Cloudflare IPs whitelisten
# ===================================================================================
# Script: ee-ufw.sh
# Version: 1.0.0
# Date: 2018-05-27
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: UFW Firewall einrichten & Cloudflare IPs whitelisten.
#------------------------------------------------------------------------------------
# | Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/ee-ufw.sh.log
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
# UFW Firewall installieren
#------------------------------------------------------------------------------------
apt-get -qq update && apt-get -yqq install ufw
#------------------------------------------------------------------------------------
# 5. UFW Firewall konfigurieren & aktivieren
#------------------------------------------------------------------------------------
ufw logging on
ufw default allow outgoing
ufw default deny incoming
ufw allow 22
ufw allow 80
ufw allow 123 # NTP
ufw allow 161 # SNMP
ufw allow 443
ufw allow 873 # Rsync
ufw allow 6556 # SNMP
ufw allow 22222
ufw enable
#------------------------------------------------------------------------------------
# 6. Whitelist Cloudflare network IPv4+IPv6 - https://github.com/Paul-Reed/cloudflare-ufw
#------------------------------------------------------------------------------------
mkdir /home/tools
wget -O /home/tools/cloudflare-ufw.sh https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/home/tools/cloudflare-ufw.sh
chmod 700 /home/tools/cloudflare-ufw.sh
bash /home/tools/cloudflare-ufw.sh
systemctl restart ufw
#------------------------------------------------------------------------------------
# 7. Skript Ende & Logfile Pfad Ausgabe
#------------------------------------------------------------------------------------
echo -e "${GREEN}UFW Firewall einrichten und Cloudflare IPs whitelisten - Logfile: $LOGFILE ${NC}\n"
