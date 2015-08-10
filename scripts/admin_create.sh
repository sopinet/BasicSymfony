#!/bin/sh

# Creates a fos_user admin user. Receives 2 command line parameters:
#   MAIL: user email (mandatory)
#   PASSWORD: user password (optional)
# Username is derived from MAIL. If no PASSWORD is provided, it will be 'admin'
# Use example:
#   sh admin_create.sh MAIL [PASSWORD]

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