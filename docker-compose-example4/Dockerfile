# using PHP base image with apache 
FROM php:8.0-apache
# define default login path of containers
WORKDIR /var/www/html 
# copy source code from local to container
COPY src/ /var/www/html/
# publish container app port 
EXPOSE 80 
