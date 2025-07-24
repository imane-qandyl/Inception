FROM debian:latest

RUN apt update && apt upgrade -y && apt install -y \
    nginx \
    openssl

RUN mkdir -p /etc/nginx/ssl && \
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/nginx/ssl/imqandyl.42.fr.key \
    -out /etc/nginx/ssl/imqandyl.42.fr.crt \
    -subj "/CN=imqandyl.42.fr"

COPY default /etc/nginx/sites-available/default

CMD ["nginx", "-g", "daemon off;"]
