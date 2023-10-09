<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Iniciar proyecto

Clonar repositorio

```sh
git clone https://github.com/ivanhuanca/laravel-crud.git
cd laravel crud
copy .env.example .env
```

Instalar dependencias

```sh
composer install
```

Arrancar migraciones y seeders (Crear una BD local llamada "crud")

```sh
php artisan migrate --seed
```

Iniciar servidor para los assets

```sh
npm install
npm run dev
```

En una terminal diferente

```sh
php artisan serve
```

Accesos:

Email
```sh
ivandhp@gmail.com
```

Password
```sh
password
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
