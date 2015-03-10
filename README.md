What is it?
===========

BasicSymfony is a Plug&Play installation/package for easy and fast Symfony deploy. Try it.

Installation
============

Console
<pre>cd /var/www/</pre>
<pre>git clone https://github.com/sopinet/BasicSymfony.git YourProjectName</pre>

Change parameters.yml with your configuration database<br>

Execute: 

First installation (generate bundles)
<pre>sh scripts/composer_install.sh</pre>

It required to you set your database (you need create it first)

Update SCHEMA (for fos_user / sonata)
<pre>sh scripts/update_schema.sh</pre>

Install assets
<pre>sh scripts/assetic_install.sh</pre>

Clean caché
<pre>sh scripts/cache_clear.sh</pre>

Create superAdmin user
<pre>sh scripts/create_superadmin.sh USER EMAIL@EMAIL.COM PLAIN_PASSWORD</pre>

Change repository
<pre>git remote set-url origin https://github.com/USERNAME/YOUREPOSITORY.git</pre>

That's all!

¿ERRORES? (TODO: Translate to English)
=========
¿Has encontrado errores?
- En ese caso, antes de hacer el cambio del repositorio por el tuyo, haz un git commit / push y mándanos los errores que hayas arreglado corregidos
- Gracias
