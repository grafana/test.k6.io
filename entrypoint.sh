#!/usr/bin/env sh

#substitute placeholders with env variables in login.php and my_messages.php
cd /var/www/test.loadimpact.com/www
cp login.php login.php.orig
cp my_messages.php my_messages.php.orig
WEB_HOSTNAME=${WEB_HOSTNAME:-test.loadimpact.com} \
&& sed -i login.php -e "s~##WEB_HOSTNAME##~${WEB_HOSTNAME}~g" \
&& sed -i my_messages.php -e "s~##WEB_HOSTNAME##~${WEB_HOSTNAME}~g"

#start supervisord
exec supervisord -c /etc/supervisor/supervisor.conf