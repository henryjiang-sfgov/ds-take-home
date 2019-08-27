FROM markoshust/lumen-php-apache:7.2-0

RUN  a2enmod rewrite
RUN  a2ensite default-ssl
RUN  a2enmod ssl

ADD . /var/www/html

EXPOSE 80
EXPOSE 443

