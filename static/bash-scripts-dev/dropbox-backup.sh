#!/bin/bash
apt-get -y update
pip install dropbox
wget https://raw.githubusercontent.com/SergiX44/ISPConfigBackup/master/ISPConfigBackup.py
wget https://raw.githubusercontent.com/SergiX44/ISPConfigBackup/master/config.py
nano config.py
echo -e "Starte ein volles Backup mit dem Befehl:[${green}python ISPConfigBackup.py${NC}]\n"

