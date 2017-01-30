# Laravel 5.4 passport demo

This is demo project  ofr laravel backend API server which authenticates using external users.


## Setup

```
git clone https://github.com/gandra/laravel54-passport-demo-external-user
cd laravel54-passport-demo-external-user
cp .env.example .env
composer install
php artisan key:generate
npm install
npm run dev
php artisan migrate
php artisan passport:install
```

## TODO

1. Authenticate against external users tables
2. Integrarte roles and permissions