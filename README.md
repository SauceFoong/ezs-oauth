<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# EzStore Assignment (Backend)

## How to run

### Step 1: Set up and installation

```
git clone https://github.com/SauceFoong/ezs-oauth.git
```

### Step 2: Install dependencies

Go to directory of the app in terminal/cmd type commands:

```
composer install
npm install
```

### Step 3: Insert Environment Variables

Create an .env file in root directory and insert the values below:
(Let me know if you need the values or you may create your own)

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=


GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=

GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=

```

### Step 4: DB Migratation

```
php artisan migrate
```

### Step 5: Run with Docker

Open your Docker Desktop and type this command in terminal/ cmd

```
./vendor/bin/sail up
```

Open another tab in the terminal/cmd to run the frontend app

```
./vendor/bin/sail npm install && npm run dev
```

Then access http://127.0.0.1/ with browser

## Demo

You can watch the demo with video file "demo.mov" in root directory
