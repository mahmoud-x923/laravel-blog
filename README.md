<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This App

This is a Blog web application built with *Laravel, TailwindCSS, Mysql, Blade* and *Alpine.JS*, Containes core features such as Registration system, filtering, searching and admin panel.

## Installation

First clone the repository. 
```sh

git clone https://github.com/mahmoud-x923/laravel-blog.git
```
Then install dependencies.
```sh

composer install
```

Setup your .env file.
```sh

cp .env.example .env
```

Next step is to create the database.
```sh
php artisan db
create database {DB_NAME}
```

Finally, run the migration and seeders
```sh
php artisan migrate --seed
```



