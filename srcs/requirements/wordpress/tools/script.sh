#!/bin/bash

rm -rf latest.tar.gz /var/www/html/* && mv wordpress/* ./var/www/html/
mv /var/wp-config.php /var/www/html/ 
mv /var/config /etc/php/7.3/fpm/pool.d/www.conf

exec "$@"