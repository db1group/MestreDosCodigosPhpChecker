FROM composer

COPY docker-build/run-config/ /opt/exercises-checker
WORKDIR /opt/exercises-checker
RUN composer install

ARG EXERCISE
COPY test/${EXERCISE} /opt/exercises-checker/test

ENTRYPOINT composer test
