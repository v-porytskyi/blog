FROM ubuntu:20.04

ARG CONTAINER_BUILD_TAG
ARG CONTAINER_BUILD_NUMBER
ARG CONTAINER_BUILD_BRANCH

ENV DEBIAN_FRONTEND="noninteractive"
ENV CONTAINER_BUILD_TAG=$CONTAINER_BUILD_TAG
ENV CONTAINER_BUILD_NUMBER=$CONTAINER_BUILD_NUMBER
ENV CONTAINER_BUILD_BRANCH=$CONTAINER_BUILD_BRANCH

WORKDIR /var/www/html
VOLUME /var/www/html

RUN apt-get update \
    && apt-get install -y \
        unzip \
        curl \
        alien \
        apt-utils \
        apache2 \
        --reinstall software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get install -y \
        php8.1 \
        php8.1-bcmath \
        php8.1-bz2 \
        php8.1-cli \
        php8.1-common \
        php8.1-curl \
        php8.1-gd \
        php8.1-imap \
        php8.1-intl \
        php-json \
        php8.1-mbstring \
        php8.1-mysql \
        php8.1-pgsql \
        php8.1-opcache \
        php8.1-readline \
        php8.1-xml \
        php8.1-zip \
        php8.1-gmp \
        php8.1-phpdbg \
        php-ds \
        php-apcu \
        php-geoip \
        php-oauth \
        php-uuid \
    && apt-get clean

RUN a2enmod rewrite

COPY apache2.conf /etc/apache2/apache2.conf
COPY php.ini /etc/php/8.1/apache2/php.ini
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80

ENTRYPOINT ["apache2ctl"]

CMD  ["-DFOREGROUND"]
