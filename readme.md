# What is this about? #
It is a continuation of the development of a RESTful API in Laravel, because Lumen is focused on the development of APIs due to its lightness and the benefits that are inherited from Laravel.

In this brach **ft-authentication-with-token-very-simple** the goal is to integrate authentication very simple with a token passed by HTTP header to API

# How To #
Check extended documentation in **apirf-lumen.master.pdf**
and **apirf-lumen.ft-authentication-with-token-very-simple.pdf**

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

