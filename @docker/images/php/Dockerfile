FROM php:7.1-fpm-alpine

RUN echo http://mirror.yandex.ru/mirrors/alpine/v3.7/main > /etc/apk/repositories; \
 echo http://mirror.yandex.ru/mirrors/alpine/v3.7/community >> /etc/apk/repositories

RUN set -ex && apk --no-cache add postgresql-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql pgsql pdo_pgsql json
RUN docker-php-ext-enable mysqli pgsql pdo_pgsql

RUN apk --update add icu-dev php7-intl

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# Install mbstring
#RUN docker-php-ext-install mbstring

#LOGS directory permission
RUN chmod 777 /var/log
RUN mkdir -p /var/www/smarthire/images && \
    chmod 777 /var/www/smarthire/images

RUN mkdir -p /var/www/smarthire/data/cache && \
    mkdir -p /var/www/smarthire/data/logs && \
    touch /var/www/smarthire/data/logs/logs.txt && \
    chmod 777 -R /var/www/smarthire/data