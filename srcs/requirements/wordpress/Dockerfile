FROM debian:buster

RUN	apt-get update
EXPOSE 9000

RUN     apt-get install -y curl php vim  wget php-mysql php7.3-fpm  unzip

RUN mkdir -p /var/www/html
COPY	./conf/config	/var/config
COPY	./conf/wp-config.php	/var/wp-config.php
RUN chown -R www-data:www-data /var/www/* && mkdir -p /run/php && chmod -R +x /var/www/*
RUN wget https://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz
COPY	./tools/script.sh /var/script.sh
RUN	chmod +x /var/script.sh
ENTRYPOINT	["/var/script.sh"]
CMD ["php-fpm7.3", "--nodaemonize"]