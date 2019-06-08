# ![Laravel Example App](logo.png)

> ### Laravel codebase containing real world examples from Arquivei.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com/rafaeloteixeira/Desafio-Bolton.git

Switch to the repo folder

    cd Desafio-Bolton

Install all the dependencies using composer

    composer install

Start the local development server

    docker-compose up -d
    docker exec -it desafio-bolton-php-fpm /bin/bash

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

You can now access the server at http://localhost:8888

**TL;DR command list**

    docker exec -it desafio-bolton-postgres psql -U postgres
    docker exec -it desafio-bolton-php-fpm /bin/bash

    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Environment variables

- `.env` - Environment variables can be set in this file

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8888/
    http://localhost:8888/nota/salvar
    http://localhost:8888/nota?chave=35180109647481000104550010000005781000005788

Request headers

| **Required** 	| **Key**           | **Value**            |
|-------------- |------------------	|--------------------- |
| Yes       	| Content-Type     	| application/json     |
| Yes       	| x-api-id       	| p7WHm8CxRVKi9VnQZh7T |
| Yes 	        | x--api-key    	| FnXr5RkM60V7O9c7Wdzh |

Endpoint: https://apiuat.arquivei.com.br/v1/nfe/received

