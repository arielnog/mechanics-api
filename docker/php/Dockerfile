FROM php:8.0.0-fpm-alpine

ENV COMPOSER_HOME /composer
ENV PATH /composer/vendor/bin:$PATH
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');"

RUN mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-install pdo_mysql

RUN apk --update add --no-cache \
    ${PHPIZE_DEPS}

RUN pecl install -o -f redis && \
    rm -rf /tmp/pear && \
    docker-php-ext-enable redis

WORKDIR /app
COPY . .

