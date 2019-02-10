#!/bin/bash
apt-get update && apt-get -y upgrade && apt-get -y dist-upgrade && apt-get -y autoremove
apt-get -y install dnsutils locate apt-transport-https software-properties-common lsb-release ca-certificates ssh openssh-server ntp ntpdate debconf-utils binutils sudo git lsb-release haveged e2fsprogs curl
adduser isp 
usermod -a -G sudo isp

cd /home/isp
git clone https://github.com/PageSpeed-Ninjas/kit.git 
chmod -Rf 755 /home/isp 
chown -Rf isp /home/isp 
cd /home/isp/kit
