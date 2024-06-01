FROM php:7.4-apache

# Copy application files
COPY app/ /var/www/html/

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Set up NTFS share (requires ntfs-3g package)
RUN apt-get update && apt-get install -y ntfs-3g

# Ensure /mnt/ntfs-share exists and has appropriate permissions
RUN mkdir -p /mnt/ntfs-share && chmod 777 /mnt/ntfs-share