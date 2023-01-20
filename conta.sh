#!/bin/bash
#
find /var/www/html/slackware/15.0/x86_64/ -type f -name "*.txz" | wc -l > /var/www/html/total.txt
