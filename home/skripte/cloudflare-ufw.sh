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
DIR="$(dirname $(readlink -f $0))"
cd $DIR
wget https://www.cloudflare.com/ips-v4 -O ips-v4.tmp
wget https://www.cloudflare.com/ips-v6 -O ips-v6.tmp
mv ips-v4.tmp ips-v4
mv ips-v6.tmp ips-v6

for cfip in `cat ips-v4`; do ufw allow from $cfip; done
for cfip in `cat ips-v6`; do ufw allow from $cfip; done

ufw reload > /dev/null

# OTHER EXAMPLE RULES
# Examples to retrict to port 80
#for cfip in `cat ips-v4`; do ufw allow from $cfip to any port 80 proto tcp; done
#for cfip in `cat ips-v6`; do ufw allow from $cfip to any port 80 proto tcp; done

# Examples to restrict to port 443
#for cfip in `cat ips-v4`; do ufw allow from $cfip to any port 443 proto tcp; done
#for cfip in `cat ips-v6`; do ufw allow from $cfip to any port 443 proto tcp; done
