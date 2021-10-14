FROM php:8.0.11-fpm

COPY src/composer.lock* src/composer.json* /var/www/html/

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql
#RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
#RUN docker-php-ext-install gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY ./src /var/www/html
RUN COMPOSER_VENDOR_DIR="/var/www/vendor" composer install

RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install nodejs -y
RUN npm install
RUN npm run dev

RUN chown -R www:www /var/www/html
CMD ls -al


#FROM node:14.18-alpine
#ENV NODE_ENV=production
#COPY src/package.json* src/package-lock.json* /var/www/html/
#RUN npm install --production
#RUN rm -rf node_modules
#RUN npm cache clear --force
#RUN npm install
#RUN ["chmod", "755", "/var/www/html"]
#RUN npm run dev

USER www
CMD ["php-fpm"]
EXPOSE 9000
