#!/bin/bash
# ===================================================================================
# | NGiNX - Geo IP wöchentlich updaten
# ===================================================================================
# Script: nginx-geoip-update.sh
# Version: 1.0.0
# Date: 2018-05-27
# Author: Daniel Bieli <danibieli.1185@gmail.com>
# Description: NGiNX - Geo IP wöchentlich updaten. https://www.maxmind.com/de/geoip2-services-and-databases

# Download Country IP database
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz
gunzip GeoIP.dat.gz
rm -f /usr/share/GeoIP/GeoIP.dat
mv GeoIP.dat /usr/share/GeoIP/GeoIP.dat

# Download City IP database
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz
gunzip GeoLiteCity.dat.gz
rm -f /usr/share/GeoIP/GeoIPCity.dat
mv GeoLiteCity.dat /usr/share/GeoIP/GeoIPCity.dat
