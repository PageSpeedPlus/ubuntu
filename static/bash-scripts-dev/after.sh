#!/bin/bash

nano /etc/nginx/nginx.conf

# gzip_types text/plain
#           text/css
#           text/javascript
#           text/xml
#           application/json
#           application/javascript
#           application/x-font-ttf
#           application/xml
#           application/xml+rss 
           # add svg
#           image/svg+xml;

sudo nginx -t
sudo service nginx reload

# Nginx VHost optimieren

echo -e "[${green}HTTP/2 im ISP Config Backend (Inklusive Apps VHost und Roundcube) ${NC}]\n"

cp /etc/nginx/sites-available/ispconfig.vhost /home/isp/kit/backup/files/ispconfig.vhost.bak
sed -i "s/;listen 8080;/listen 8080 http2;/" /etc/nginx/sites-available/ispconfig.vhost

cp /etc/nginx/sites-available/apps.vhost /home/isp/kit/backup/files/apps.vhost.bak
sed -i "s/;listen 8081;/listen 8081 http2;/" /etc/nginx/sites-available/apps.vhost

cp /etc/nginx/sites-available/roundcube.vhost /home/isp/kit/backup/files/roundcube.vhost.bak
sed -i "s/;listen 443 ssl;/listen 443 ssl http2;/" /etc/nginx/sites-available/roundcube.vhost

service nginx reload

# Munin

htpasswd -c /etc/munin/munin-htpasswd munin
munin-node-configure --suggest
service munin-node restart

# Monit

apt-get –y install monit
cp /etc/monit/monitrc /home/isp/kit/backup/files/monitrc.bak
cat /dev/null > /etc/monit/monitrc
cat > /etc/monit/monitrc <<END
set daemon 60
set logfile syslog facility log_daemon
set mailserver smtp.gmail.com port 587
    username "danibieli.1185@gmail.com" password "Dan!el1992"
    using ssl
set mail-format { from: monit@web.isp.conf.tk }
set alert dani@rysa.ch
set httpd port 2812 and
 SSL ENABLE
 PEMFILE /var/certs/monit.pem
 allow monit:monit

# Nginx

check process nginx with pidfile /var/run/nginx.pid
  start program = "/etc/init.d/nginx start"
  stop program  = "/etc/init.d/nginx stop"
  group www-data (for ubuntu, debian)

# MariaDB

check process mysql with pidfile /run/mysqld/mysqld.pid
    start program = "/usr/sbin/service mysql start" with timeout 60 seconds
    stop program  = "/usr/sbin/service mysql stop"
    if failed unixsocket /var/run/mysqld/mysqld.sock then restart

# Memcached

check process memcached with pidfile /var/run/memcached.pid
 start program = "/usr/sbin/service memcached start"
 stop program = "/usr/sbin/service memcached stop"
 if failed host 127.0.0.1 port 11211 then restart

# SSH

check process sshd with pidfile /var/run/sshd.pid
 start program "/usr/sbin/service ssh start"
 stop program "/usr/sbin/service ssh stop"
 if failed port 22 protocol ssh then restart
 if 5 restarts within 5 cycles then timeout

# FTP

check process proftpd with pidfile /var/run/proftpd.pid
   start program = "/etc/init.d/proftpd start"
   stop program  = "/etc/init.d/proftpd stop"
   if failed port 21 protocol ftp then restart

# System

check system $HOST
    if loadavg (5min) > 3 then alert
    if loadavg (15min) > 1 then alert
    if memory usage > 80% for 4 cycles then alert
    if swap usage > 20% for 4 cycles then alert
    # Test the user part of CPU usage 
    if cpu usage (user) > 80% for 2 cycles then alert
    # Test the system part of CPU usage 
    if cpu usage (system) > 20% for 2 cycles then alert
    # Test the i/o wait part of CPU usage 
    if cpu usage (wait) > 80% for 2 cycles then alert
    # Test CPU usage including user, system and wait. Note that 
    # multi-core systems can generate 100% per core
    # so total CPU usage can be more than 100%
    if cpu usage > 200% for 4 cycles then alert

# Cron

check process cron with pidfile /var/run/cron.pid
   group system
   start program = "/etc/init.d/cron start"
   stop  program = "/etc/init.d/cron stop"
   depends on cron_rc

check file cron_rc with path /etc/init.d/cron
   group system
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

# Syslogd

check process syslogd with pidfile /var/run/syslogd.pid
   start program = "/etc/init.d/sysklogd start"
   stop program = "/etc/init.d/sysklogd stop"

 check file syslogd_file with path /var/log/syslog
   if timestamp > 65 minutes then alert # Have you seen "-- MARK --"?

# Zeit

check process ntpd with pidfile /var/run/ntpd.pid
   start program = "/etc/init.d/ntpd start"
   stop  program = "/etc/init.d/ntpd stop"
   if failed host 127.0.0.1 port 123 type udp then alert

# ClamAV

check process clamavd with pidfile /var/run/clamd.pid
   group virus
   start program = "/etc/init.d/clamavd start"
   stop  program = "/etc/init.d/clamavd stop"
   if failed unixsocket /var/run/clamd then restart
   depends on clamavd_bin
   depends on clamavd_rc

 check file clamavd_bin with path /opt/virus/clamavd/clamavd
   group virus
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

 check file clamavd_rc with path /etc/init.d/clamavd
   group virus
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

# Postfix

check process postfix with pidfile /var/spool/postfix/pid/master.pid
   group mail
   start program = "/etc/init.d/postfix start"
   stop  program = "/etc/init.d/postfix stop"
   if failed port 25 protocol smtp then restart
   depends on postfix_rc

 check file postfix_rc with path /etc/init.d/postfix
   group mail
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

# dovecot

check process dovecot with pidfile /var/run/dovecot/master.pid
   start program = "/etc/init.d/dovecot start"
   stop program = "/etc/init.d/dovecot stop"
   group mail
   if failed host web.ispconf.tk port 993 type tcpssl sslauto protocol imap for 5 cycles then restart
   depends dovecot_init
   depends dovecot_bin
check file dovecot_init with path /etc/init.d/dovecot
   group mail
check file dovecot_bin with path /usr/sbin/dovecot
   group mail

# SpamAssassin

check process spamd with pidfile /var/run/spamd.pid
   group mail
   start program = "/etc/init.d/spamd start"
   stop  program = "/etc/init.d/spamd stop"
   if cpu usage > 99% for 5 cycles then alert
   if mem usage > 99% for 5 cycles then alert
   depends on spamd_bin
   depends on spamd_rc

 check file spamd_bin with path /usr/local/bin/spamd
   group mail
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

 check file spamd_rc with path /etc/init.d/spamd
   group mail
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

# Amavis 

check process amavisd with pidfile /opt/virus/amavis-new/var/run/amavisd.pid
   group mail
   start program = "/etc/init.d/amavis-new start"
   stop  program = "/etc/init.d/amavis-new stop"
   if failed port 10024 protocol smtp then restart
   depends on amavisd_bin
   depends on amavisd_rc

 check file amavisd_bin with path /opt/virus/amavis-new/bin/amavisd
   group mail
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

 check file amavisd_rc with path /etc/init.d/amavis-new
   group mail
   if failed checksum then unmonitor
   if failed permission 755 then unmonitor
   if failed uid root then unmonitor
   if failed gid root then unmonitor

# Mailman

check process mailman with pidfile /var/run/mailman/mailman.pid
  group mail
  start program = "/usr/sbin/service mailman start"
  stop program = "/usr/sbin/service mailman stop"

# Webmin
#
#check process webmin with pidfile /var/webmin/miniserv.pid
#  group webmin
#  start program = "/etc/init.d/webmin start"
#  stop  program = "/etc/init.d/webmin stop"
#  if failed host 192.168.1.3 port 10000 then restart
#
#check file webmin_rc with path /etc/init.d/webmin
#  group webmin
#  if failed checksum then unmonitor
#  if failed permission 755 then unmonitor
#  if failed uid root then unmonitor
#  if failed gid root then unmonitor
END

mkdir /var/certs
cd /var/certs

cat > /var/certs/monit.cnf <<END
# create RSA certs - Server

RANDFILE = ./openssl.rnd

[ req ]
default_bits = 2048
encrypt_key = yes
distinguished_name = req_dn
x509_extensions = cert_type

[ req_dn ]
countryName = Country Name (2 letter code)
countryName_default = MO

stateOrProvinceName             = State or Province Name (full name)
stateOrProvinceName_default     = Monitoria

localityName                    = Locality Name (eg, city)
localityName_default            = Monittown

organizationName                = Organization Name (eg, company)
organizationName_default        = Monit Inc.

organizationalUnitName          = Organizational Unit Name (eg, section)
organizationalUnitName_default  = Dept. of Monitoring Technologies

commonName                      = Common Name (FQDN of your server)
commonName_default              = server.monit.mo

emailAddress                    = Email Address
emailAddress_default            = root@monit.mo

[ cert_type ]
nsCertType = server
END

openssl req -new -x509 -days 365 -nodes -config ./monit.cnf -out /var/certs/monit.pem -keyout /var/certs/monit.pem
openssl gendh 1024 >> /var/certs/monit.pem
openssl x509 -subject -dates -fingerprint -noout -in /var/certs/monit.pem
chmod 600 /var/certs/monit.pem
service monit start

# MariaDB

echo -e "[${green}Percona Konfig für MariaDB importieren${NC}]\n"

cat > /etc/my.cnf <<END
# Generated by Percona Configuration Wizard (http://tools.percona.com/) version REL5-20120208
 
[mysql]
 
# CLIENT #
port                           = 3306
socket                         = /var/run/mysqld/mysqld.sock
 
[mysqld]
 
# GENERAL #
user                           = mysql
default-storage-engine         = InnoDB
socket                         = /var/run/mysqld/mysqld.sock
pid-file                       = /var/run/mysqld/mysqld.pid
tmpdir                         = /tmp
 
# MyISAM #
key-buffer-size                = 32M
myisam-recover                 = FORCE,BACKUP
 
# SAFETY #
max-allowed-packet             = 16M
max-connect-errors             = 1000000
skip-name-resolve
sysdate-is-now                 = 1
innodb                         = FORCE
innodb-strict-mode             = 1
 
sql-mode="NO_ENGINE_SUBSTITUTION"
# DATA STORAGE #
datadir                        = /var/lib/mysql
 
# CACHES AND LIMITS #
tmp-table-size                 = 16M
max-heap-table-size            = 16M
query-cache-type               = 1
query-cache-size               = 16M
max-connections                = 300
thread-cache-size              = 50
open-files-limit               = 65535
table-definition-cache         = 1024
table-open-cache               = 2048
 
# INNODB #
innodb-flush-method            = O_DIRECT
innodb-log-files-in-group      = 2
innodb-log-file-size           = 128M
innodb-flush-log-at-trx-commit = 2
innodb-file-per-table          = 1
innodb-buffer-pool-size        = 128M
innodb_fast_shutdown           = 0
 
# LOGGING #
log-error                      = /var/log/mysql/mysql-error.log
log-queries-not-using-indexes  = 0
slow-query-log                 = 1
slow-query-log-file            = /var/log/mysql/mysql-slow.log
 
# REDUCE MEMORY USAGE #
performance_schema             = 0


mv /etc/my.cnf /etc/mysql/my.cnf
/etc/init.d/mysql restart