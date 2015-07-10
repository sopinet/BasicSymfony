#!/bin/bash

chmod 777 app/cache -R
chmod 777 app/logs -R
php app/console assets:install
php app/console assetic:dump --env=prod --no-debug
chmod 777 app/cache -R
chmod 777 app/logs -R

