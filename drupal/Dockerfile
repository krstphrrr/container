FROM drupal:8

# getting vim inside the container for development/troubleshooting
RUN apt-get update && apt-get install apt-file -y && apt-file update \ 
&& apt-get install vim -y && apt-get install netcat -y

# RUN composer require drupal/admin_toolbar:^3.0 drupal/business_responsive_theme:^1.3

# backup utilities available by default
# RUN composer require drupal/backup_migrate:5.0.0-rc2

# custom apache2 and settings.php 
COPY ./phpmyadmin/apache2.conf /etc/apache2/apache2.conf
# Because it is a single site, copy contents to default then create the actual site in same dir
COPY ./docroot/default /opt/drupal/web/sites/default
RUN cp -a /opt/drupal/web/sites/default/. /opt/drupal/web/sites/new.jornada.nmsu.edu/

# local drush ( local with respect to the drupal install; not global)
RUN COMPOSER_MEMORY_LIMIT=-1 composer require drush/drush 

RUN COMPOSER_MEMORY_LIMIT=-1 composer require drupal/admin_toolbar:^3.0 drupal/business_responsive_theme:^1.3

# making sure the drush path is available
RUN export PATH="$HOME/.composer/vendor/bin:$PATH"

RUN chown -R www-data /opt/drupal
RUN chown -R www-data /var/www
RUN chmod 777 -R /opt/drupal
RUN chown -R www-data /tmp
RUN chmod 777 -R /tmp

# making custom scripts available
COPY ./drupal/entrypoint.sh /usr/local/bin/
