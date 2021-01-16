FROM debian:buster

WORKDIR /var/www

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
