#!/bin/sh

# Configura permisos estándar de producción a la carpeta web
# La carpeta uploads podría requerir más permisos, dependiendo de la configuración del servidor web

find ./web -type d -print0 | xargs -0 chmod 755
find ./web -type f -print0 | xargs -0 chmod 644
