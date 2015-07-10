#!/bin/sh

# Genera una clase Admin para la entidad pasada como parámetro

php app/console sonata:admin:generate AppBundle/Entity/$1
