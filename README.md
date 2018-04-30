## Laravel Plesk Onyx 17.8 Xml

### Installation
Install this package with composer:
```
composer require nickurt/laravel-plesk-xml:1.*
```

Add the provider to config/app.php file

```php
'nickurt\PleskXml\ServiceProvider',
```

and the facade in the file

```php
'PleskXml' => 'nickurt\PleskXml\Facade',
```

Copy the config files for the PleskXml-plugin

```
php artisan vendor:publish --provider="nickurt\PleskXml\ServiceProvider" --tag="config"
```
### Tests
```sh
phpunit
```
- - - 