# Use the official PHP image from the Docker Hub
FROM php:8.1-apache

# Install necessary PHP extensions for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the application code to the container
COPY . /var/www/html/

# Expose port 82
EXPOSE 82
