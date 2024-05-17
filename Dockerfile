# Use the PHP 8.1 FPM base image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set environment variable to allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Set working directory
WORKDIR /var/www

# Copy the composer.json and composer.lock files first to leverage Docker cache
COPY composer.json composer.lock ./

# Install Laravel dependencies
RUN composer install --no-dev --no-interaction --optimize-autoloader --no-scripts --verbose && composer clear-cache

# Copy existing application directory contents
COPY . .

# Set ownership and permissions
RUN chown -R www-data:www-data /var/www

# Expose port 9000
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
