FROM	debian:buster

RUN	apt-get update
RUN	apt-get install -y mariadb-server

EXPOSE	3306

COPY	./conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf
COPY    ./conf/wordpress.sql  /etc/wordpress.sql
#CREATE DATABASE WORDPRESS # CREATE USER HHARIK # GRANT ALL PRIV ON WORDPRESS TO USER HHARIK #CHANGE ROOT PASSWORD

#RUN	service mysql start &&  mysql -u root -e "CREATE DATABASE IF NOT EXISTS wordpress;CREATE USER IF NOT EXISTS 'hharik'@'%' IDENTIFIED BY 'hharik@pass';GRANT ALL PRIVILEGES ON wordpress.* TO 'hharik'@'%' ; ALTER USER 'root'@'localhost' IDENTIFIED BY 'root@pass'"
COPY	./tools/script.sh /etc/script.sh
RUN 	chmod +x /etc/script.sh && bash /etc/script.sh
CMD ["mysqld"]
