#!/bin/sh

if [ -z "$1" ]
then
  echo 'Provide the exercise id you want to build a docker image: (e.g. ddos-tracker; calculator)'
  read EXERCISE_ID
else
  EXERCISE_ID=$1
fi

docker build \
-t byivo/mdc-php-checker:$EXERCISE_ID \
--build-arg EXERCISE=$EXERCISE_ID \
-f docker-build/Dockerfile \
.
