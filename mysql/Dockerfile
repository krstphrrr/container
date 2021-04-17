from mysql:latest

RUN apt-get update && apt-get install apt-file -y && apt-file update && apt-get install vim -y && apt-get install netcat -y

ADD ./db-backups/test.sql /docker-entrypoint-initdb.d

# ENTRYPOINT /var/mysql/backups/entrypoint.sh users ${MUSR} ${MPW} ${MDB}

