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

COPY ./srcs/nginx.config /etc/nginx/sites-available/
COPY ./srcs/server_db.sql /etc/nginx/sql
RUN ln -s /etc/nginx/sites-available/nginx.config /etc/nginx/sites-enabled

WORKDIR /var/www

RUN wget https://wordpress.org/latest.tar.gz

RUN openssl req -x509 -nodes -days 1000 -subj\
	"/C=RU/ST=Tatarstan/L=Kazan/O=21school/OU=Evolution/CN=localhost"\
	-newkey rsa:4096 -keyout /etc/ssl/shamil.key -out /etc/ssl/shamil.crt;

COPY /srcs/init.sh ./

CMD bash init.sh