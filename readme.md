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
    
    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:XPraiGsOG7yRZcMpMP9AOFA1pBJ24ykiQlLkiRD06Ec=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack

    DB_CONNECTION=pgsql
    DB_HOST=postgres
    DB_PORT=5432
    DB_DATABASE=arquivei-test
    DB_USERNAME=postgres
    DB_PASSWORD=123456

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=mt1

    MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

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

