FROM drupal:8

# getting vim inside the container for development/troubleshooting
RUN apt-get update && apt-get install apt-file -y && apt-file update \ 
&& apt-get install vim -y && apt-get install netcat -y

# installing drupal modules / themes etc
# RUN composer require drupal/ds drupal/field_group drupal/bootstrap4 drupal/jquery_ui_accordion

# backup utilities available by default
RUN composer require drupal/backup_migrate:5.0.0-rc2

# custom php.ini's
# COPY ./exports/php.ini-production /usr/local/etc/php/php.ini-production
# COPY ./exports/php.ini-development /usr/local/etc/php/php.ini-development

# custom apache2 and settings.php 
COPY ./phpmyadmin/apache2.conf /etc/apache2/apache2.conf
COPY ./docroot/default/settings.php /opt/drupal/web/sites/default/settings.php

# COPY ./exports/settings.local.php /opt/drupal/web/sites/default/settings.local.php

# local drush ( local with respect to the drupal install; not global)
RUN COMPOSER_MEMORY_LIMIT=-1 composer require drush/drush 
# making sure the drush path is available
RUN export PATH="$HOME/.composer/vendor/bin:$PATH"

# making custom scripts available
COPY ./drupal/entrypoint.sh /usr/local/bin/
