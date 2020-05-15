FROM php:7.2-apache

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Configuracoes do php e apache
COPY ./apache2 /etc/apache2/
COPY ./configphp/php.ini $PHP_INI_DIR

RUN apt-get update -q; \
	apt-get install -y --no-install-recommends \
		libfreetype6-dev \
		libicu-dev \
		libjpeg-dev \
		libmagickcore-dev \
		libmagickwand-dev \
		libmcrypt-dev \
		libpng-dev \
		libgmp-dev \
		libpq-dev \
		libxml2-dev \
		libxslt-dev \
		libzip-dev \
		unzip \
		zlib1g-dev \
		libbz2-dev \
	&& apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-configure mysqli --with-mysqli=mysqlnd && \
    docker-php-ext-install mysqli && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/lib && \
    docker-php-ext-install gd && \
    docker-php-ext-install soap && \
    docker-php-ext-install intl && \
    docker-php-ext-install gmp && \
    docker-php-ext-install zip && \
    docker-php-ext-install sockets && \
	docker-php-ext-install bz2 && \
	docker-php-ext-install calendar && \
	docker-php-ext-install exif && \
	docker-php-ext-install gettext && \
	docker-php-ext-install shmop && \
	docker-php-ext-install sysvmsg && \
	docker-php-ext-install sysvsem && \
	docker-php-ext-install sysvshm && \
	docker-php-ext-install wddx && \
	docker-php-ext-install xsl && \
	docker-php-ext-install opcache && \
	a2enmod rewrite && \
	service apache2 restart
