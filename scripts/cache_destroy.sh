#!/bin/sh

sudo rm -rf app/cache/*
sudo rm -rf app/logs/*
sudo chmod 777 app/cache -R
sudo chmod 777 app/logs -R
