# PWL_5
Repository ini dibuat untuk memenuhi tugas Praktikum Pemrograman Web Lanjut Shift-5

```sh
Nama    : Yusril Azhar Permana
NPM     : 5520120074
```
```sh

```sh
Fitur yang ada
1. Read Data Buku
2. Create Data Buku
3. Update Data Buku
4. Delete Data Buku
5. SweetAlert
6. Print to PDF
7. Export/Import File
8. Sudah terhubung dengan Rest API
```
```sh


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

