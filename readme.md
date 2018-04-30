# What is this about? #
It is a continuation of the development of a RESTful API in Laravel, because Lumen is focused on the development of APIs due to its lightness and the benefits that are inherited from Laravel.

As in the past development in Laravel, https://github.com/riv4wi/apirf-laravel, I will use 3 entities: **user, vehicle** and **manufacturer**.

The relationships for now, for these entities are:
1 Vehicle *belongs_to 1* Manufacturer (belongsTo)
1 Manufacturer *manufactures* N Vehicle (hasMany)

```php
The goal is to create a system autentication with JWT to a multilanguage RESTful API in Lumen, using always trying best practices.
```
Any observation is welcome!

# How To #
Check extended documentation in **apirf-lumen.master.pdf** and **ft-authentication-with-JWT-tymon-jwt-auth.pdf**

# Installation guide #


- Configure Apache virtual host for directory PATH_TO_PROJECT_IN_SERVER/public
- Copy project file to PATH_TO_PROJECT_IN_SERVER

```bash
cd PATH_TO_PROJECT_IN_SERVER
chmod -R 777 storage
chmod -R 777 bootstrap/cache
composer install
mv -v .env.example .env
php artisan key:generate
```

## Technology stack used ##
- **OS** Linux Mint 18.2 Sonya - Cinnamon 3.4.3
- **Apache** 2.4.18 (Ubuntu)1.5.6
- **PHP** 7.0.22-0ubuntu0.16.04.1 (cli) (NTS)
- **Laravel Framework Lumen** 5.6.3
- **Composer** 1.5.6

