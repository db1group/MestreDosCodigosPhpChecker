#!/bin/sh
set -e

find test/ -maxdepth 1 -mindepth 1 -type d | while read DIR_WITH_EXERCISE_TESTS; do
  TEST_DIT_PATH_PATTERN='test\/\/'

  EXERCISE_ID=`echo "$DIR_WITH_EXERCISE_TESTS" | sed -e "s/$TEST_DIT_PATH_PATTERN//g"`

  echo "Pushing $EXERCISE_ID image..."

  docker push "byivo/mdc-php-checker:$EXERCISE_ID"
done
