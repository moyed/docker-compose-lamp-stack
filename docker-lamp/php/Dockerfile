FROM php:5.6-apache
MAINTAINER Moyed Ansari @imansaripk

COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev \
  && docker-php-ext-install pdo_mysql mysqli gd iconv 
COPY ./yourhost.com.conf  /etc/apache2/sites-available/
COPY ./hosts  /etc/hosts
#RUN a2enmod rewrite 

RUN service apache2 restart
WORKDIR /etc/apache2/sites-available/
RUN a2ensite yourhost.com.conf 


