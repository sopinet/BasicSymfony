#!/bin/bash
if [ -f "composer.json" ];
then
	chmod -R 755 *
	find . -type f -print0|xargs -0 chmod 644
	rm app/cache/dev_old -R
	chmod 777 app/cache
	chmod 777 app/cache/* -R
	chmod 777 app/logs
	chmod 777 app/logs/* -R
	php app/console cache:clear
	php app/console --env=prod cache:clear
	chmod -R 755 *
	find . -type f -print0|xargs -0 chmod 644
	chmod 777 app/cache
	chmod 777 app/cache/* -R
	chmod 777 app/logs
	chmod 777 app/logs/* -R
	chmod 777 web/uploads/documents

	php app/console --env=prod assetic:dump

	chmod -R 777 *
else
	echo "Error. Sitúese en el directorio raíz de Symfony";
fi
