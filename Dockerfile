FROM ubuntu:16.04
EXPOSE 8000
RUN apt-get -y update
RUN apt-get -y install apache2
RUN apt-get -y install php
RUN apt-get -y install libapache2-mod-php
RUN apt-get -y install php-intl
RUN apt-get -y install php-xml
RUN apt-get -y update
RUN apt-get -y install composer
RUN apt-get -y install zip
RUN apt-get -y install unzip
RUN rm -rf /var/www/html/
RUN apt-get -y install git
RUN git clone https://github.com/seveun/eCommerce
RUN mv eCommerce /var/www/
RUN composer install -d /var/www/eCommerce
RUN php /var/www/eCommerce/bin/console server:start