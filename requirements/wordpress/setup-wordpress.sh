#!/bin/bash

# Wait for MariaDB to be ready using wpuser credentials
echo "Waiting for MariaDB to be ready..."
until mysql -h "$WORDPRESS_DB_HOST" -u "$WORDPRESS_DB_USER" -p"$WORDPRESS_DB_PASSWORD" -e "SELECT 1"; do
    echo "MariaDB is unavailable - sleeping"
    sleep 2
done
echo "MariaDB is ready!"

# Navigate to the web root directory
cd /var/www/html

if [ ! -f ./wp-cli.phar ]; then
    echo "Downloading WP-CLI..."
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
fi

# Check if WordPress is already installed
if ! ./wp-cli.phar core is-installed --allow-root; then
    echo "Downloading WordPress core..."
    ./wp-cli.phar core download --allow-root

    echo "Creating wp-config.php..."
    /wp-cli.phar config create \
        --dbname="$WORDPRESS_DB_NAME" \
        --dbuser="$WORDPRESS_DB_USER" \
        --dbpass="$WORDPRESS_DB_PASSWORD" \
        --dbhost="$WORDPRESS_DB_HOST" \
        --allow-root

    echo "Installing WordPress..."
    ./wp-cli.phar core install \
        --url=localhost \
        --title=inception \
        --admin_user=imane \
        --admin_password=imane \
        --admin_email=imane@imane.com \
        --allow-root
else
    echo "WordPress is already installed. Skipping setup..."
fi

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm8.2 -F