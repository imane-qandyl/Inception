#!/bin/bash

# Wait for MariaDB to be ready
echo "Waiting for MariaDB to be ready..."
while ! mysqladmin ping -h mariadb --silent; do
    sleep 1
done
echo "MariaDB is ready!"

# Navigate to the web root directory
cd /var/www/html

# Check if WordPress is already installed
if [ -f wp-config.php ]; then
    echo "WordPress is already installed. Skipping setup..."
else
    # Download WP-CLI
    echo "Downloading WP-CLI..."
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar

    # Download WordPress core files
    echo "Downloading WordPress core..."
    ./wp-cli.phar core download --allow-root

    # Create the wp-config.php file
    echo "Creating wp-config.php..."
    ./wp-cli.phar config create --dbname=wordpress --dbuser=wpuser --dbpass=password --dbhost=mariadb --allow-root

    # Install WordPress
    echo "Installing WordPress..."
    ./wp-cli.phar core install --url=localhost --title=inception --admin_user=admin --admin_password=admin --admin_email=admin@admin.com --allow-root
fi

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm8.2 -F
