#!/bin/bash
# ===================================================================================
# | MariaDB 10.2 - Installation & Konfiguration
# ===================================================================================
# Script: mariadb.sh
# Version: 1.0.0
# Date: 2018-05-12
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: MariaDB 10.2 installieren und konfigurieren.
#------------------------------------------------------------------------------------
# 1. Induviduelle Variabeln
#------------------------------------------------------------------------------------
LOGFILE=/var/log/mariadb.sh.log
ROOT_SQL_PASS=345Y3nG!n3
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
# 4. Repository hinzufügen
#------------------------------------------------------------------------------------
curl -sS https://downloads.mariadb.com/MariaDB/mariadb_repo_setup | sudo bash -s -- --mariadb-server-version=10.2 --skip-maxscale
apt-get -qq update > /dev/null 2>&1
#------------------------------------------------------------------------------------
# 5. MariaDB installieren
#------------------------------------------------------------------------------------
apt-get -y install mariadb-server percona-toolkit percona-xtrabackup-24
#------------------------------------------------------------------------------------
# 6. Root Account Daten in MariaDB Konfig hinterlegen - Then create a file /etc/mysql/conf.d/my.cnf to provide root credentials to EasyEngine with the following content :
#------------------------------------------------------------------------------------
cat <<EOF > /etc/mysql/conf.d/my.cnf
[client]
user=root
password=$ROOT_SQL_PASS
EOF
echo -e "${GREEN}Passwort: $ROOT_SQL_PASS ${NC}\n"
#------------------------------------------------------------------------------------
# 7. Passwort setzten und unnötige Tabellen löschen - It’s not needed to set a root password during the installation, but use the commmand mysql_secure_installation to set the root password and to remove anonymous users and useless tables.
#------------------------------------------------------------------------------------
mysql_secure_installation
#------------------------------------------------------------------------------------
# 8. Lade Tools zur MariaDB Optimierung
#------------------------------------------------------------------------------------
mkdir /home/tools > /dev/null 2>&1
cd /home/tools
wget http://www.day32.com/MySQL/tuning-primer.sh > /dev/null 2>&1
wget http://mysqltuner.com/mysqltuner.pl > /dev/null 2>&1
chmod 700 tuning-primer.sh mysqltuner.pl
#------------------------------------------------------------------------------------
# 9. Skript Ende & Logfile Pfad Ausgabe
#------------------------------------------------------------------------------------
echo -e "${GREEN}MariaDB installiert - Logfile: $LOGFILE ${NC}\n"
