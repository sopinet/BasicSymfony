#!/bin/sh

# Crea un usuario administrador de fos_user
# Requiere un email, del que extrae el usuario. Si no se suministra contraseña, será "admin"

if [ -z "$1" ]; then
	echo "Parameter 'email' is required"
	exit 0
else
	MAIL=$1;
	USER=`echo $1| cut -d'@' -f 1`
fi

if [ -z "$2" ]; then
	PASS="admin"
else
	PASS=$2
fi

php app/console fos:user:create $USER $MAIL $PASS --super-admin
