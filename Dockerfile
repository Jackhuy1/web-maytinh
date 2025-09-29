# Use official PHP Apache image with PHP 8.1 (or a version you prefer)
FROM php:8.1-apache

# Install system dependencies and PHP extensions including MySQL extension
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        zip \
        unzip \
        && docker-php-ext-configure zip \
        && docker-php-ext-install -j$(nproc) zip mysqli pdo pdo_mysql \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install -j$(nproc) gd

# Enable Apache mod_rewrite (optional, common for PHP apps)
RUN a2enmod rewrite

# Copy your PHP source code into the container's web root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Set proper permissions (optional, adjust as needed)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in the foreground (default command of php:apache)
CMD ["apache2-foreground"]
