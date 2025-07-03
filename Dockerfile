# Use official PHP image with Apache
FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy app files to container
COPY ./app/ /var/www/html/
COPY ./db /var/www/html/db

# Set working directory
WORKDIR /var/www/html


# Expose port 80
EXPOSE 80
