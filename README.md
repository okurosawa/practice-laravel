# Laravel Practice

## Project setup

1. Clone this project then copy and rename env-file.

```shell
git clone <Paste project URL or Use SSH>
cd <app_name>
cp .env.sample .env
```

**After that, edit `.env` to your environment.**

2. Build container and run the docker-compose.

```shell
docker-compose up -d --build
```

3. Enter to `app` container and run these command.

```shell
cd <app_name>
composer install
php artisan key:generate
php artisan migrate
```
