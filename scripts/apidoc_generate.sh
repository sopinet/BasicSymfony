#!/bin/sh

# Este comando genera un fichero HTML autónomo con la documentación de ApiDoc
# No es necesario para visualizarla online
mkdir -p ./doc/
php app/console api:doc:dump --format=html > doc/api.html
