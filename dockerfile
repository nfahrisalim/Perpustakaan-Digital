FROM php:8.1-fpm

# Install dependencies (PHP, Composer, etc.)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zlib1g-dev git

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy files
COPY . /app/

# Copy .env if necessary
COPY .env.example .env

# Set proper permissions
RUN chown -R www-data:www-data /app
RUN chmod -R 775 /app/storage /app/bootstrap/cache

# Install dependencies using Composer
RUN composer dump-autoload
RUN composer install --ignore-platform-reqs -vvv

# Install NPM dependencies
RUN npm ci

# Expose port and run server (if applicable)
EXPOSE 8000
CMD ["php-fpm"]
