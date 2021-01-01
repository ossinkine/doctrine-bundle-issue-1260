FROM php:7.4-fpm-alpine

RUN docker-php-ext-install -j$(nproc) opcache
COPY opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN set -x \
    && mkdir -p /usr/src/php/ext/apcu \
    && curl https://pecl.php.net/get/apcu \
        | tar xvz --directory=/usr/src/php/ext/apcu --strip=1 \
    && docker-php-ext-install -j$(nproc) apcu \
    && rm -rf /usr/src/php/ext/apcu
