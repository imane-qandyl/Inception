FROM debian:bullseye

RUN apt update && apt upgrade -y && apt install -y \
    mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY tools/init.sql /etc/mysql/init.sql
COPY tools/setup-mariadb.sh /usr/local/bin/setup-mariadb.sh

# Create necessary directories and set permissions
RUN mkdir -p /run/mysqld /var/lib/mysql && \
    chown -R mysql:mysql /run/mysqld /var/lib/mysql && \
    chmod +x /usr/local/bin/setup-mariadb.sh

VOLUME ["/var/lib/mysql"]

CMD ["/usr/local/bin/setup-mariadb.sh"]
