#!/bin/bash
apt-get install -y apt-transport-https software-properties-common
apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xB4112585D386EB94
add-apt-repository https://dl.hhvm.com/debian
apt-get update
