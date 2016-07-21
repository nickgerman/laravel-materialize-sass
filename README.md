# laravel-materialize-sass

This plugin installs the [Materialize CSS](http://materializecss.com/) into the resources/assets/sass/materialize folder of your assets.
This plugin also places the javascript in public/js/materialize/ directory.

## Installation

* Require this package in your composer.json and run composer update.
```
    "qntm/laravel-materialize-sass": "dev-master"
```

* After updating composer, add ServiceProvider to the providers array in config/app.php
```php
    Qntm\LaravelMaterializeSass\MaterializeSassServiceProvider::class,
```

* Add Facade to the aliases array in config/app.php
```php
	'MaterializeSass' => Qntm\LaravelMaterializeSass\MaterializeSass::class,
```

*  Then publish the package's assets to public folder:
```
    $ php artisan vendor:publish --tag=materializesass --force
```

## Updates
You can re-publish the assets automatically when composer updated the package:

* In your composer.json, go to **scripts** > **post-update-cmd** section, add the next line:
```
    "php artisan vendor:publish --tag=materializesass --force"
```

* The code will look similar to:
```
    "post-update-cmd": [
        "php artisan optimize",
        "php artisan vendor:publish --tag=materializesass --force"
    ],
```

## Usage

There are differents methods to include Materialize Sass JS assets:

* **include_full()**
```php
    {!! MaterializeSass::includeMaterialize($minified) !!}
```
Where ```$minified = true``` the minified version of js will be added, otherwise the full version will be added.  Default behaviour if it is not passed in is ```$minified = true```