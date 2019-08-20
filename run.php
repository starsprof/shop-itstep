
$ composer create-project --prefer-dist laravel/laravel blog

$ composer require --dev barryvdh/laravel-ide-helper

       After updating composer, add the service provider to the providers array in config/app.php
$ Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,

$ php artisan clear-compiled

      You can configure your composer.json to do this after each commit:

        "scripts":{
        "post-update-cmd": [
        "Illuminate\\Foundation\\ComposerScripts::postUpdate",
        "php artisan ide-helper:generate",
        "php artisan ide-helper:meta"
        ]
        },

$ php artisan ide-helper:generate

$ composer require --dev doctrine/dbal

$ php artisan ide-helper:models Post