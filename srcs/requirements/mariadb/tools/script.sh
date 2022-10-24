#!/bin/bash
service mysql start 

mysql -u root -e "CREATE DATABASE IF NOT EXISTS wordpress;"
mysql -u root -e "CREATE USER IF NOT EXISTS 'hharik'@'%' IDENTIFIED BY 'hharik@pass';"
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'hharik'@'%' ;"
mysql -u root --password=root@pass wordpress < /etc/wordpress.sql
mysql -u root -e  "ALTER USER 'root'@'localhost' IDENTIFIED BY 'root@pass'"

#service mysql stop

#mysqld
