FROM debian:buster

WORKDIR /srcs

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get -y install wget
RUN apt-get -y install nginx
# Wordpress, phpMyAdmin, and a SQL database.