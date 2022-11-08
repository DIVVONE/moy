ARG PHP_VERSION

FROM php:${PHP_VERSION}-fpm-alpine

ARG USER_GID=1000
ARG USER_UID=1000

ENV PHP_VERSION "$PHP_VERSION"

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV TZ=Europe/Moscow

ENV LANG=en_US.UTF-8 \
    LANGUAGE=en_US.UTF-8 \
    LC_ALL=en_US.UTF-8 \
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_NO_INTERACTION=1 \
    PHP_EXTENTIONS="gd intl bcmath gd intl mysqli pdo_mysql zip gmp" \
    PHP_EXTENSIONS_CONFIGURE="gd" \
    PHP_BUILDDEPS="icu-dev build-base" \
    PHP_RUNDEPS="zlib-dev gmp-dev libzip-dev libgd libpng-dev libpq icu-libs libmcrypt autoconf libc6-compat" \
    COMMON_PACKAGES="git zip unzip curl" \
    PECL_EXTENSIONS=""

RUN if [ COMMON_PACKAGES != "" ]; then \
 apk add --no-cache ${COMMON_PACKAGES}; \
fi

# Set TimeZone
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install PHP extentions
RUN apk add --no-cache ${PHP_RUNDEPS} \
    && apk add --no-cache --virtual .php_builddeps ${PHP_BUILDDEPS} \
    && docker-php-ext-configure ${PHP_EXTENSIONS_CONFIGURE} \
    && docker-php-ext-install ${PHP_EXTENTIONS} \
    && docker-php-ext-enable ${PHP_EXTENTIONS} \
    # install PECL extensions
    && for EXT in ${PECL_EXTENSIONS}; do \
            pecl install ${EXT} \
            && docker-php-ext-enable ${EXT}; \
        done \
    && rm -rf /tmp/pear \
    && apk del .php_builddeps

RUN addgroup -g ${USER_GID} app \
  && adduser -D -s /bin/sh -G app -u ${USER_UID} app

RUN mkdir -p /var/www/html \
    && chown -R app:app /var/www

# Php configs
RUN rm -rf /usr/local/etc/php/php-fpm.d/*.conf
COPY php-fpm.conf       /usr/local/etc/php-fpm.conf
COPY php-fpm.d/         /usr/local/etc/php-fpm.d/

EXPOSE 9000
WORKDIR /var/www/html
USER app
