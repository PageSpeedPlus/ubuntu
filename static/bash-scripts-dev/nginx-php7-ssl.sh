#!/bin/bash
echo "Füge Dot.deb Repo hinzu.. "
wget https://www.dotdeb.org/dotdeb.gpg
apt-key add dotdeb.gpg
echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list
apt-get update
echo -e "[${green}DONE${NC}]\n"

echo "Installiere Nginx PageSpeed mit Full HTTP/2 Support"
apt-get -y install nginx-extras
service nginx start
echo -e "[${green}DONE${NC}]\n"

echo "Installiere PHP 7.0 & benötigte PHP Module des ISPConfig"
apt-get -y install php7.0 php7.0-fpm php7.0-common php7.0-gd php7.0-mysql php7.0-imap php7.0-cli php7.0-cgi php-pear php7.0-mcrypt php7.0-curl php7.0-intl php7.0-pspell php7.0-recode php7.0-sqlite3 php7.0-tidy php7.0-xmlrpc php7.0-xsl php7.0-zip php7.0-mbstring php7.0-imap php7.0-mcrypt php7.0-snmp php7.0-xmlrpc php7.0-xsl
sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.0/fpm/php.ini
sed -i "s/;date.timezone =/date.timezone=\"Europe\/Zurich\"/" /etc/php/7.0/fpm/php.ini

echo "Installing needed Programs for PHP and NGINX... "
apt-get -yqq install php5-cli php5-mysql php5-mcrypt mcrypt imagemagick memcached curl tidy snmp > /dev/null 2>&1
service php7.0-fpm reload
apt-get -yqq install fcgiwrap
echo -e "[${green}DONE${NC}]\n"

echo "Installing Lets Encrypt... "	
apt-get -yqq install certbot > /dev/null 2>&1
echo -e "[${green}DONE${NC}]\n"
