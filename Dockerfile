# Use the nouphet/docker-php4 image
FROM nouphet/docker-php4

# Copy the PHP file into the container
COPY ./app/ /var/www/html/

# Set ServerName to avoid warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Note: MySQLi might not be available for PHP 4, using mysql extension instead
# RUN docker-php-ext-install mysqli
