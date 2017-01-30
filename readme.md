# Laravel 5.4 passport demo

This is demo project  ofr laravel backend API server which authenticates using external users.
External users table is simulated with `temp_external_users` table and access to this table is via view `v_users`.
`App\MyUser` is model which is connected to this view.
Custom user provider is `App\Extensions\ExternalUserUserProvider`


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
php artisan db:seed
php artisan passport:install
```

## TODO

1. Authenticate against external users tables
2. Integrarte roles and permissions