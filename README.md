#laravel-composer
Improve running composer on Laravel 5 projects

====

### Installation

* Require this package in your composer.json and run composer update.
```
    "skydiver/laravel-composer": "dev-master"
```

* After updating composer, add ServiceProvider to the providers array in config/app.php
```php
    Skydiver\LaravelComposer\LaravelComposerServiceProvider::class,
```


### Current Commands

```
php artisan composer:update
```
Save current composer packages, execute `composer update` and save post update packages list. 
