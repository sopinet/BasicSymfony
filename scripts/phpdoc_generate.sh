#!/bin/bash
if [ -f "composer.json" ];
then
     php vendor/phpdocumentor/phpdocumentor/bin/phpdoc -d ./src -t ./web/docs
else
	echo "Error. Sitúese en el directorio raíz de Symfony";
fi
