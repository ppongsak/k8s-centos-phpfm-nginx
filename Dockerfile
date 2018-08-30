FROM pongsak/centos-phpfpm-nginx:4.0
MAINTAINER "Pongsak Prabparn" <pongsak@rebatemango.com>

COPY ./app /var/www/html

# install Composer and plugins
WORKDIR /var/www/html

Run composer install

# Set the port to 80 
EXPOSE 80

# Executing supervisord
CMD ["supervisord" , "-n"]

