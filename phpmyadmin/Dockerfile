FROM phpmyadmin/phpmyadmin:latest

RUN apt-get update && apt-get install apt-file -y && apt-file update && apt-get install vim -y && apt-get install netcat -y

COPY ./phpmyadmin/apache2.conf /etc/apache2/apache2.conf