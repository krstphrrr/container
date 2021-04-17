#!/usr/bin/env bash


#updating using composer

composer update drupal/core "drupal/core-*" --with-all-dependencies && drush updb && drush cache:rebuild