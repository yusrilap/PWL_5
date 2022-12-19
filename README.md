# PWL_5
Repository ini dibuat untuk memenuhi tugas Praktikum Pemrograman Web Lanjut Shift-5


## Install

```sh
npm install
composer install
```
```sh

## Fix if php error  
composer self-update
composer clear-cache
rm -rf vendor
rm composer.lock
composer install --ignore-platform-reqs
```
## Usage

```sh
cp .env.example .env
php artisan key:generate
php artisan migrate:refresh --seed
php artisan db:seed --class=CreateUsersSeeder
php artisan db:seed --class=CreateRolesSeeder
php artisan storage:link
```


## Run tests

```sh
php artisan serve
```

## For API
```sh
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate:fresh --seed
php artisan db:seed --class=CreateRolesSeeder
php artisan db:seed --class=CreateUsersSeeder
```

