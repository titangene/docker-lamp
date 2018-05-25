FROM php:7.1-apache
LABEL maintainer="titangene.tw@gmail.com"

# Install the PHP extensions we need
RUN set -ex; \
	apt-get update; \
	docker-php-ext-install -j$(nproc) pdo_mysql; \
	rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite