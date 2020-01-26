#!/bin/sh

if [ -z "$1" ]
then
  echo 'Provide the exercise id you want to build a docker image: (e.g. ddos-tracker; calculator)'
  read EXERCISE_ID
else
  EXERCISE_ID=$1
fi


SOURCE_CODE_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
docker build \
-t byivo/mdc-php-checker:$EXERCISE_ID \
--build-arg EXERCISE=$EXERCISE_ID \
-f $SOURCE_CODE_DIR/Dockerfile \
.
