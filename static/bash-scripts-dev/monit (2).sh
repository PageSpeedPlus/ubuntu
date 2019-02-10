apt-get install monit
cp /etc/monit/monitrc /etc/monit/monitrc_orig
cat /dev/null > /etc/monit/monitrc
nano /etc/monit/monitrc

set daemon 60
set logfile syslog facility log_daemon
set mailserver localhost
set mail-format { from: monit@server1.example.com }
set alert root@localhost
set httpd port 2812 and
 SSL DISABLE
 PEMFILE /var/certs/monit.pem
 allow monit:monit

# SSH

check process sshd with pidfile /var/run/sshd.pid
 start program "/usr/sbin/service ssh start"
 stop program "/usr/sbin/service ssh stop"
 if failed port 22 protocol ssh then restart
 if 5 restarts within 5 cycles then timeout
