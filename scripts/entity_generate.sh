#!/bin/sh

# Autogenera los metodos de todas las entidades del bundle que se especifique

php app/console doctrine:generate:entities AppBundle/Entity/$1

#php app/console doctrine:generate:entities ApplicationSopinetUserBundle:User
