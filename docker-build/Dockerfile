FROM composer

COPY docker-build/run-config/ /opt/exercises-checker
WORKDIR /opt/tests
RUN composer install

COPY test /opt/tests/test

ENTRYPOINT ./vendor/bin/phpunit
