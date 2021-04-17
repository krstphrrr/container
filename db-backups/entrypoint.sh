#!/usr/bin/env bash

# exec mysql -u ${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE} < /var/mysql/backups/daily_jornadanmsuedu_2021-04-14_00h05m_Wednesday.sql

# exec "$@"
TABLE=$1
USR=$2 
PW=$3
DB=$4

SQL_EXISTS=$(printf 'show tables like "%s";' "$TABLE")
SQL_IS_EMPTY=$(printf 'SELECT 1 FROM %s LIMIT 1;' "$TABLE")
DUMP="/var/mysql/backups/daily_jornadanmsuedu_2021-04-14_00h05m_Wednesday.sql"

USERNAME=$USR
PASSWORD=$PW
DATABASE=$DB

# CFG_MYSQL_HOST=localhost

# until netcat -z -v -w30 $CFG_MYSQL_HOST 3306
# do
#   echo "waiting for db..."
#   sleep 5
# done

echo "checking..."

if [[ $(mysql -u $USERNAME -p$PASSWORD -e "$SQL_EXISTS" $DATABASE) ]]
then
  echo "table exists"
  if [[ $(mysql -u $USERNAME -p$PASSWORD -e "$SQL_IS_EMPTY" $DATABASE) ]]
  then
    echo "table has records"
  else
    echo "table is empty"
  fi
else
  echo "table does not exist" 
  $(mysql -u $USERNAME -p$PASSWORD $DATABASE < $DUMP)
fi

