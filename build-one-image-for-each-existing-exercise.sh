#!/bin/sh

find test/ -maxdepth 1 -mindepth 1 -type d | while read DIR_WITH_EXERCISE_TESTS; do
  TEST_DIT_PATH_PATTERN='test\/\/'

  EXERCISE_ID=`echo "$DIR_WITH_EXERCISE_TESTS" | sed -e "s/$TEST_DIT_PATH_PATTERN//g"`

  echo "Building $EXERCISE_ID image..."

  ./build-non-versioned-image-for-exercise.sh "$EXERCISE_ID"
done
