#!/bin/bash
# ===================================================================================
# | Ubuntu 18.04 - Grundinstallation & Konfiguration
# ===================================================================================
# Script: ubuntu-18.04.sh
# Version: 2.0.0
# Date: 2018-06-09
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: Ubuntu 18.04 installieren und konfigurieren.
#------------------------------------------------------------------------------------
# | Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/ee-ubuntu.sh.log
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
# ===================================================================================
# 1. Ubuntu aktualisieren & aufräumen
#------------------------------------------------------------------------------------
apt-get -qq update && apt-get -yqq upgrade && apt-get -yqq dist-upgrade && apt-get -yqq autoremove && apt-get -qq clean 2>> $LOGFILE
#------------------------------------------------------------------------------------
# Benötigte Pakete installieren
#------------------------------------------------------------------------------------
apt-get -y install language-pack-de language-pack-de-base html2text manpages-de cron-apt unattended-upgrades curl wget ufw haveged git unzip zip fail2ban htop dnsutils zoo bzip2 arj nomarch lzop cabextract locate apt-listchanges apt-transport-https software-properties-common lsb-release ca-certificates ssh nload nntp ntpdate debconf-utils binutils sudo e2fsprogs openssh-server openssl ssl-cert mcrypt nano rsync
#------------------------------------------------------------------------------------
# Standart Shell von Dash auf Bash Shell umstellen
#------------------------------------------------------------------------------------
echo "dash dash/sh boolean false" | debconf-set-selections
dpkg-reconfigure -f noninteractive dash
#------------------------------------------------------------------------------------
# 7. Erlaubt SSH Logins via Passwort & Verbietet Root Login
#------------------------------------------------------------------------------------
sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/' /etc/ssh/sshd_config
sed -i 's/PermitRootLogin yes/PermitRootLogin without-password/' /etc/ssh/sshd_config
/etc/init.d/ssh restart
#------------------------------------------------------------------------------------
# 8. Tweak Kernel source & Increase open files limits source
#------------------------------------------------------------------------------------
modprobe tcp_htcp
wget -O /etc/sysctl.conf https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/sysctl.conf #https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/sysctl.conf
sysctl -p
wget -O /etc/security/limits.conf https://virtubox.github.io/ubuntu-nginx-web-server/files/etc/security/limits.conf #https://raw.githubusercontent.com/PageSpeedPlus/easyengine/master/etc/security/limits.conf
#------------------------------------------------------------------------------------
# 9. Deaktiviere transparente Hugepage für Redis Cache
#------------------------------------------------------------------------------------
echo never > /sys/kernel/mm/transparent_hugepage/enabled
#------------------------------------------------------------------------------------
# 10. Konfigure automatische Sicherheits Updates
#------------------------------------------------------------------------------------
dpkg-reconfigure unattended-upgrades
#------------------------------------------------------------------------------------
# 11. Syntax Highlighten im nano Editor
#------------------------------------------------------------------------------------
git clone https://github.com/scopatz/nanorc.git /usr/share/nano-syntax-highlighting/
echo "include /usr/share/nano-syntax-highlighting/*.nanorc" >> /etc/nanorc
#------------------------------------------------------------------------------------
# 12. Skript Ende & Logfile Pfad Ausgabe
#------------------------------------------------------------------------------------
echo -e "${GREEN}Ubuntu 16.04 Grundkonfiguration abgeschlossen - Logfile: $LOGFILE ${NC}\n"
