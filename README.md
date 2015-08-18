[![SensioLabsInsight](https://insight.sensiolabs.com/projects/84f19b4e-6135-457d-be83-56b684231595/big.png)](https://insight.sensiolabs.com/projects/84f19b4e-6135-457d-be83-56b684231595) [![Build Status](https://travis-ci.org/sopinet/BasicSymfony.svg?branch=master)](https://travis-ci.org/sopinet/BasicSymfony) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sopinet/BasicSymfony/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sopinet/BasicSymfony/?branch=master)



What is it?
===========

BasicSymfony is a Plug&Play installation/package for easy and fast Symfony deploy. Try it.

Requirements
============

BasicSymfony includes phpdocumentor/template-zend that requires ext-xsl PHP extension to work. Symfony also requires intl PHP extension for multilanguage support. This can be installed through your package manager:

```
sudo apt-get install php5-xsl
sudo apt-get install php5-intl
```

Installation
============

Console
<pre>cd /var/www/</pre>
<pre>git clone --branch 1.0 https://github.com/sopinet/BasicSymfony.git YourProjectName</pre>

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

How to customize error pages overriding the default error templates
<pre>[The Cookbook - Overriding the Default Error Templates](http://symfony.com/doc/current/cookbook/controller/error_pages.html#overriding-the-default-error-templates)</pre>

That's all!

¿ERRORES? (TODO: Translate to English)
=========
¿Has encontrado errores?
- En ese caso, antes de hacer el cambio del repositorio por el tuyo, haz un git commit / push y mándanos los errores que hayas arreglado corregidos
- Gracias
