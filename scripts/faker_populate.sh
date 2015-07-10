#!/bin/bash
if [ -f "composer.json" ];
then
    php app/console faker:populate
else
    echo "Error. Sitúese en el directorio raíz de Symfony";
fi