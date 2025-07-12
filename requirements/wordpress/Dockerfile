FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    php-fpm \
    php-mysqli \
    curl \
    default-mysql-client # Add this package to install mysqladmin

# Create the log directory for PHP-FPM
RUN mkdir -p /var/log/php-fpm && chown www-data:www-data /var/log/php-fpm

COPY www.conf /etc/php/8.2/fpm/pool.d
COPY setup-wordpress.sh /usr/local/bin/setup-wordpress.sh
RUN mkdir /run/mysqld && chmod +x /usr/local/bin/setup-wordpress.sh
CMD ["/usr/local/bin/setup-wordpress.sh"]


# mysql_install_db