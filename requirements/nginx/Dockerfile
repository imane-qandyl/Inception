FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    nginx
COPY default etc/nginx/sites-available 
CMD ["nginx", "-g", "daemon off;"]


#copy them inside the containers



#docker-compose up --build
# docker ps /verify
# docker-compose down
# docker-compose up --build
# docker ps
# docker logs nginx
# docker logs wp-php