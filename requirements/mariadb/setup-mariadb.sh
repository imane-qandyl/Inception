#!/bin/bash

# Initialize the database if it doesn't exist
if [ ! -d "/var/lib/mysql/wordpress"]; then
    echo "Initializing MariaDB database..."
    mysql_install_db --user=mysql --datadir=/var/lib/mysql
fi

# Start MariaDB
echo "Starting MariaDB..."
exec mysqld --user=mysql --datadir=/var/lib/mysql
