#!/bin/bash
if [ -f "composer.json" ];
then
  php app/console doctrine:generate:entities AppBundle
else
	echo "Error. Sitúese en el directorio raíz de Symfony";
fi
