# Learn Vuex with basic ecommerce example

Watch complete **[Vuex tutorials here](https://www.youtube.com/watch?v=JDR7_AHk9D4&list=PL1TrjkMQ8UbVSDkDaLkjpeNGkblNU8rpW)**.

## Laravel Api setup
For the Vuex tutorial purpose, I have created this very basic Laravel API. So, before running the Vuex project, you need to run the Laravel API project first. For that, follow the below steps:

### Install composer dependencies
```
cd laravel-api
composer install
```
### Database Migrations
After installing composer dependencies, add your database credentials in `.env` file and then run migrations.
```
php artisan migrate
```
Now it's time to generate some dummy products. For that, I have created `ProductTableSeeder`. It will generate dummy products using faker. So, run `db:seed` to generate some dummy products.
```
php artisan db:seed
```
Now, in the terminal run `artisan serve` command. It will run the application at `http://127.0.0.1:8000` URL, and that URL path used in the Vuex source code.
```
php artisan serve
```
If you are running the Laravel API on a different URL path, then you need to update the URL path in the `src/apis/Api.js` of the Vuex project.

## Vuex Project setup
```
cd vuex-tutorial
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```


[Vuex tutorial (Vue.js state management) Playlist](https://www.youtube.com/playlist?list=PL1TrjkMQ8UbVSDkDaLkjpeNGkblNU8rpW)