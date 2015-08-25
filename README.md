[![SensioLabsInsight](https://insight.sensiolabs.com/projects/84f19b4e-6135-457d-be83-56b684231595/big.png)](https://insight.sensiolabs.com/projects/84f19b4e-6135-457d-be83-56b684231595) [![Build Status](https://travis-ci.org/sopinet/BasicSymfony.svg?branch=master)](https://travis-ci.org/sopinet/BasicSymfony) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sopinet/BasicSymfony/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sopinet/BasicSymfony/?branch=master)

What is it?
===========

BasicSymfony is a Plug&Play installation/package for easy and fast Symfony deploy. Try it.

Requirements
============

* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](http://www.vagrantup.com/downloads)
* [Ansible](http://docs.ansible.com/intro_installation.html)
* Vagrant guest additions plugin: `vagrant plugin install vagrant-vbguest`
* Vagrant hosts-updater plugin: `vagrant plugin install vagrant-hostsupdater`

Installation
============

```
$ git clone https://github.com/sopinet/BasicSymfony.git path/
$ cd path
$ vagrant up
```

Usage
=====

If the `vagrant-hostsupdater` plugin was installed you should be able to access to http://sopinet.local/app_dev.php/ , otherwise visit the address: http://192.168.33.99/app_dev.php/

How to customize error pages overriding the default error templates

[The Cookbook - Overriding the Default Error Templates](http://symfony.com/doc/current/cookbook/controller/error_pages.html#overriding-the-default-error-templates)

### Database Migrations
Database schema updates are executed using the [Doctrine Migrations library](https://github.com/doctrine/migrations), read the [DoctrineMigrationsBundle](https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html) documentation too.

While developing you may use the `doctrine:schema:update` command, and when the source is ready for the deploy import a dump (a subset) of the production database and execute:
```
$ php app/console doctrine:migrations:diff
$ php app/console doctrine:migrations:migrate -n
```

Anyway is recommended to:

* use these two commands above also while developing
* keep database migrations small

Contributing
============

Please read the [CONTRIBUTING.md](https://github.com/sopinet/BasicSymfony/blob/master/CONTRIBUTING.md) contents if you wish to help out.
