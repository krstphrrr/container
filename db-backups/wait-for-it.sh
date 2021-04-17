#!/usr/bin/env bash
CFG_MYSQL_HOST=localhost

until netcat -z -v -w30 $CFG_MYSQL_HOST 3306
do
  echo "waiting for db..."
  sleep 5
done

exec $cmd