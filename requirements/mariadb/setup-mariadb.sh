#!/bin/bash
set -e

echo "Starting MariaDB setup..."

# Initialize the database if it doesn't exist
if [ ! -d "/var/lib/mysql/wordpress" ]; then
    echo "Initializing MariaDB database..."
    mysql_install_db --user=mysql --datadir=/var/lib/mysql
fi

# Start MariaDB in the background
mysqld_safe &

# Wait for MariaDB to be ready
sleep 5

# Run initialization SQL if needed
if [ -f /etc/mysql/init.sql ]; then
    echo "Running init.sql..."
    mysql -u root < /etc/mysql/init.sql || { echo "Init.sql failed"; exit 1; }
fi

wait
