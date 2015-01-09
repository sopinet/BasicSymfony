#!/bin/sh
if [ -f "composer.json" ];
then
	rm -r app/cache
	php app/console cache:clear
	chmod -R 777 app/cache
	chmod -R 777 app/logs
else
	echo "Error. Sitúese en el directorio raíz de Symfony";
fi