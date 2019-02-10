# Corn Job - MySQLTuner.pl

crontab -e
30 02 * * * /home/isp/kit/task/mysqltuner.sh > /dev/null 2>> /var/log/ispconfig/cron.log

# This means: execute /home/isp/kit/task/mysqltuner.sh > /dev/null 2>> /var/log/ispconfig/cron.log once per day at 02:30h.