Demo application in the scope of this tutorial:
https://mydnic.be/post/how-to-build-an-efficient-and-seo-friendly-multilingual-architecture-for-your-laravel-application

# Installation
1. Git Clone this repo
2. Run `composer install`
3. Create your `.env` file at root and insert the following lines
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=

DB_HOST=localhost
DB_DATABASE=laralang
DB_USERNAME=homestead
DB_PASSWORD=secret
```
4. Run `php artisan key:generate`
5. Edit Database infos in `.env` file
6. Create the specified database and run `php artisan migrate`
7. Insert Dummy Posts with `php artisan posts:dummy`
8. Run `php artisan serv` or use Homestead to access your live dev environment
