#!/bin/bash

#capture first passed variable
FOLDER_PATH=$1

#capture second passed variable
REFERENCE_SIZE=$2

#calculate size of folder
SIZE=$(/usr/bin/du -s $FOLDER_PATH | /usr/bin/awk '{print $1}')

#convert size to MB
MBSIZE=$((SIZE / 1024))

#output size so Monit can capture it
echo "$FOLDER_PATH  -  $MBSIZE MB"

#provide status code for alert
if [[ $MBSIZE -gt $(( $REFERENCE_SIZE )) ]]; then
    exit 1
fi
