#!/bin/bash

sudo chmod 777 app/cache -R
sudo chmod 777 app/logs -R
php app/console assets:install
php app/console assetic:dump --env=prod --no-debug
sudo chmod 777 app/cache -R
sudo chmod 777 app/logs -R

