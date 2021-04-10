# Laravel 8 + Stisla + Jetstream Teams + Livewire
Combining Stisla Admin Template and Laravel 8 with Jetstream teams. Creating a ready admin template to kickstart your development.

Based from [laravel-8-stisla-jetstream]https://github.com/nyancodeid/laravel-8-stisla-jetstream

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/lukaskrs/laravel-stisla-jetstream-teams-boilerplate/issues)

## What inside?
- Laravel ^8.12 - [laravel.com/docs/8.x](https://laravel.com/docs/8.x)
- Laravel Jetstream ^2.3 - [jetstream.laravel.com](https://jetstream.laravel.com/)
- Livewire ^2.0 - [laravel-livewire.com](https://laravel-livewire.com)
- Stisla Admin Template ^2.3.0 - [getstisla.com](https://getstisla.com/)

(Dev)
- DebugBar ^3.5 - [DebugBar](https://github.com/barryvdh/laravel-debugbar)
- IdeHelper ^2.9 - [IDE Helper](https://github.com/barryvdh/laravel-debugbar) 

Include sample user table and teams page using jetstream. Configuring roles and permission is in app/Providers/JetstreamServiceProvider.

## What next?
After clone or download this repository, next step is install all dependency required by laravel and laravel-mix.

```shell
# install composer-dependency
$ composer install
# install npm package
$ npm install
# build dev 
$ npm run dev
```

Before we start web server make sure we already generate app key, configure `.env` file and do migration.

```shell
# create copy of .env
$ cp .env.example .env
# create laravel key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate
```

## How does it look?

<p align="center">
    <img src="https://lintasdigital.id/external-src/img/Dashboard.png" width="80%" height="auto" />
    <img src="https://lintasdigital.id/external-src/img/Users.png" width="80%" height="auto" />
    <img src="https://lintasdigital.id/external-src/img/Teams.png" width="80%" height="auto" />
    <img src="https://lintasdigital.id/external-src/img/profile.png" width="80%" height="auto" />
</p>

