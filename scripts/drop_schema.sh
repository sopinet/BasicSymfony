#!/bin/bash
if [ -f "composer.json" ];
then
	while true; do
		  echo
		  read -p "¿Está seguro que desea borrar la base de datos en este servidor?" yn
		  case $yn in
		      yes ) break;;
		      no ) exit;;
		      * ) echo "Por favor, responda yes o no";;
		  esac
	done
	php app/console doctrine:schema:drop --force
else
	echo "Error. Sitúese en el directorio raíz de Symfony";
fi