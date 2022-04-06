# Laravel Cutt.ly Integration Package

This package allows you to process shorten links with Cutt.ly from your Laravel application.

![Laravel Cutt.ly Integration](cover.png)

## Installation

```
composer require parsadanashvili/laravel-cuttly
```

#### For Laravel <= 5.4

If you're using Laravel 5.4 or lower, you have to manually add a service provider in your `config/app.php` file.
Open `config/app.php` and add `CuttlyServiceProvider` to the `providers` array.

```php
'providers' => [
    # Other providers
    Parsadanashvili\LaravelCuttly\CuttlyServiceProvider::class,
],
```

Publish migrations and config by running:

```shell
php artisan vendor:publish --provider="Parsadanashvili\LaravelCuttly\CuttlyServiceProvider"
```

### API Keys

Place api key to .env file:

```dotenv
CUTTLY_API_KEY=CuttlyApiKey
```

### Shorten Url

To shorten url you should use Shorten Url function

**Parameters:**

- `url` - `string`, required

**Return:** `https://cutt.ly/mFtHxpP`

```php
use Parsadanashvili\LaravelCuttly\Requests\ShortenUrl;

return ShortenUrl::request('https://google.com')
    ->name('Name') //optional
    ->process();
```

## Authors

- [Nika Parsadanashvili](https://github.com/Parsadanashvili)
