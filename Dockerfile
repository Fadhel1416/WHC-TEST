# Use an official PHP image with Apache
FROM php:8.2-apache

# Install necessary extensions (adjust as needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

# Copy your application code to the container's web directory
COPY ./src /var/www/html/

# Set working directory to the project folder
WORKDIR /var/www/html

# Expose port 80 for the web server
EXPOSE 80
