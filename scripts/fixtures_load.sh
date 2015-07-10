#!/bin/sh

php app/console doctrine:fixtures:load

#php app/console doctrine:fixtures:load --fixtures=src/AppBundle/DataFixtures/ORM_Marks --append
