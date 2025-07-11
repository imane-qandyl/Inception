FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    php-fpm

# Create the log directory for PHP-FPM
RUN mkdir -p /var/log/php-fpm && chown www-data:www-data /var/log/php-fpm

COPY www.conf /etc/php/8.2/fpm/pool.d
CMD ["php-fpm8.2", "-F"]