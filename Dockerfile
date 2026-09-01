FROM php:8.3-apache-bookworm

ENV APACHE_DOCUMENT_ROOT=/var/www/html/app/public

RUN a2enmod rewrite headers expires

COPY infrastructure/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY infrastructure/docker-entrypoint.sh /usr/local/bin/threeebs-identity-entrypoint
RUN chmod 0755 /usr/local/bin/threeebs-identity-entrypoint

WORKDIR /var/www/html
COPY . .

ENTRYPOINT ["threeebs-identity-entrypoint"]
CMD ["apache2-foreground"]

