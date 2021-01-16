FROM debian:buster


RUN apt-get update
RUN apt-get upgrade -y 
RUN apt-get -y install wget\
	nginx\
	mariadb-server\
	php7.3\
	php-mysql\
	php-fpm\
	php-pdo\
	php-gd\
	php-cli\
	php-mbstring\
	php-zip\
	php-xmlrpc\
	php-soap\
	php-intl

# nginx
COPY ./srcs/nginx.config /etc/nginx/sites-available/
COPY ./srcs/server_db.sql /etc/nginx/sql
RUN ln -s /etc/nginx/sites-available/nginx.config /etc/nginx/sites-enabled

# wordpress
WORKDIR /var/www/ft_server/wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
RUN rm -rf latest.tar.gz
RUN chown -R www-data:www-data wordpress
COPY ./srcs/wp-config.php .

# phpmyadmin
WORKDIR /var/www/ft_server
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.4-all-languages phpmyadmin
COPY ./srcs/config.inc.php phpmyadmin

# sertificate
RUN openssl req -x509 -nodes -days 365 -subj\
	"/C=RU/ST=Tatarstan/L=Kazan/O=21school/OU=Evolution/CN=localhost"\
	-newkey rsa:2048 -keyout /etc/ssl/shamil.key -out /etc/ssl/shamil.crt;

COPY /srcs/init.sh ./

CMD bash init.sh