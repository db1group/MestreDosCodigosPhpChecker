FROM composer

COPY docker-build/run-config/ /opt/exercises-checker
WORKDIR /opt/exercises-checker
RUN composer install

COPY test /opt/exercises-checker/test

ENTRYPOINT ./vendor/bin/phpunit
