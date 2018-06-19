## Laravel Plesk Onyx 17.8 Xml
### Table of contents
- [Installation](#installation)
- [Usage](#usage)
- [Tests](#tests)
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
Add the Plesk credentials to your .env file
```
PLESK_DEFAULT_HOST=
PLESK_DEFAULT_USERNAME=
PLESK_DEFAULT_PASSWORD=
```
### Usage
#### Dependency injection [e.g. by using multiple servers]
```php
// Route
Route::get('/plesk/{plesk}/customers', ['as' => 'plesk/customers', 'uses' => 'CustomersController@getIndex']);

Route::bind('plesk', function ($value, $route) {
    app('PleskXml')->server($value);

    return app('PleskXml');
});

// CustomersController
public function getIndex(Plesk $plesk)
{
    $customers = $plesk->customers()->all();

    //
}
```
#### Aps
```php
\PleskXml::aps()->all()
\PleskXml::aps()->download(array $params)
\PleskXml::aps()->import_config(array $params)
\PleskXml::aps()->import_package(array $params)
\PleskXml::aps()->install(array $params)
\PleskXml::aps()->task(array $params)
```
#### Certificates
```php
\PleskXml::certificates()->delete(array $params)
\PleskXml::certificates()->domain(array $params)
\PleskXml::certificates()->generate(array $params)
\PleskXml::certificates()->install(array $params)
```
#### Customers
```php
\PleskXml::customers()->all()
\PleskXml::customers()->create(array $params)
\PleskXml::customers()->delete(array $params)
\PleskXml::customers()->get(array $params)
```
#### Databases
```php
\PleskXml::databases()->all()
\PleskXml::databases()->create(array $params)
\PleskXml::databases()->delete(array $params)
\PleskXml::databases()->get(array $params)
\PleskXml::databases()->users(array $params)
```
#### Databases Servers
```php
\PleskXml::databasesservers()->all()
\PleskXml::databasesservers()->create(array $params)
\PleskXml::databasesservers()->delete(array $params)
\PleskXml::databasesservers()->get(array $params)
\PleskXml::databasesservers()->types()
\PleskXml::databasesservers()->local(array $params)
```
#### Dns
```php
\PleskXml::dns()->all(array $params)
\PleskXml::dns()->create(array $params)
\PleskXml::dns()->delete(array $params)
```
#### Extensions
```php
\PleskXml::extensions()->all()
\PleskXml::extensions()->get(array $params)
\PleskXml::extensions()->install(array $params)
\PleskXml::extensions()->uninstall(array $params)
```
#### Ftp
```php
\PleskXml::ftp()->all()
\PleskXml::ftp()->create(array $params)
\PleskXml::ftp()->delete(array $params)
\PleskXml::ftp()->get(array $params)
\PleskXml::ftp()->update(array $params)
```
#### Git
```php
\PleskXml::git()->all()
\PleskXml::git()->create(array $params)
\PleskXml::git()->delete(array $params)
\PleskXml::git()->deploy(array $params)
\PleskXml::git()->fetch(array $params)
\PleskXml::git()->update(array $params)
```
#### Ip
```php
\PleskXml::ip()->all()
\PleskXml::ip()->create(array $params)
\PleskXml::ip()->delete(array $params)
```
#### Locales
```php
\PleskXml::locales()->all()
\PleskXml::locales()->disable(array $params)
\PleskXml::locales()->enable(array $params)
\PleskXml::locales()->get(array $params)
```
#### LogRotations 
```php
\PleskXml::logrotations()->all()
\PleskXml::logrotations()->disable(array $params)
\PleskXml::logrotations()->enable(array $params)
\PleskXml::logrotations()->get(array $params)
\PleskXml::logrotations()->status(array $params)
```
#### Mail
```php
\PleskXml::mail()->create(array $params)
\PleskXml::mail()->delete(array $params)
\PleskXml::mail()->disable(array $params)
\PleskXml::mail()->enable(array $params)
\PleskXml::mail()->get(array $params)
\PleskXml::mail()->prefs(array $params)
```
#### NodeJS 
```php
\PleskXml::nodejs()->all()
\PleskXml::nodejs()->disable(array $params)
\PleskXml::nodejs()->enable(array $params)
```
#### Php 
```php
\PleskXml::php()->all()
\PleskXml::php()->disable(array $params)
\PleskXml::php()->enable(array $params)
\PleskXml::php()->get(array $params)
\PleskXml::php()->usage(array $params)
```
#### Plesk 
```php
\PleskXml::plesk()->additional_key()
\PleskXml::plesk()->information()
\PleskXml::plesk()->install_key(array $params)
\PleskXml::plesk()->key()
\PleskXml::plesk()->rollback_key()
\PleskXml::plesk()->services()
```
#### Resellers 
```php
\PleskXml::resellers()->all()
\PleskXml::resellers()->create(array $params)
\PleskXml::resellers()->delete(array $params)
\PleskXml::resellers()->domains(array $params)
\PleskXml::resellers()->get(array $params)
\PleskXml::resellers()->limits(array $params)
\PleskXml::resellers()->permissions(array $params)
```
#### Resellers Plans
```php
\PleskXml::resellersplans()->all()
\PleskXml::resellersplans()->create(array $params)
\PleskXml::resellersplans()->delete(array $params)
\PleskXml::resellersplans()->get(array $params)
```
#### SecretKeys
```php
\PleskXml::secretkeys()->all()
\PleskXml::secretkeys()->create(array $params)
\PleskXml::secretkeys()->delete(array $params)
\PleskXml::secretkeys()->get(array $params)
```
#### ServicePlans
```php
\PleskXml::serviceplans()->all()
\PleskXml::serviceplans()->create(array $params)
\PleskXml::serviceplans()->delete(array $params)
\PleskXml::serviceplans()->get(array $params)
```
#### ServicePlans Addons
```php
\PleskXml::serviceplansaddons()->all()
\PleskXml::serviceplansaddons()->get(array $params)
```
#### Sessions
```php
\PleskXml::sessions()->all()
\PleskXml::sessions()->create(array $params)
\PleskXml::sessions()->terminate(array $params)
```
#### Sites
```php
\PleskXml::sites()->all()
\PleskXml::sites()->create(array $params)
\PleskXml::sites()->delete(array $params)
\PleskXml::sites()->get(array $params)
\PleskXml::sites()->traffic(array $params)
```
#### SitesAliases
```php
\PleskXml::sitesaliases()->all()
\PleskXml::sitesaliases()->create(array $params)
\PleskXml::sitesaliases()->delete(array $params)
\PleskXml::sitesaliases()->get(array $params)
```
#### Subdomains
```php
\PleskXml::subdomains()->all()
\PleskXml::subdomains()->create(array $params)
\PleskXml::subdomains()->delete(array $params)
\PleskXml::subdomains()->get(array $params)
```
#### Subscriptions
```php
\PleskXml::subscriptions()->all()
\PleskXml::subscriptions()->create(array $params)
\PleskXml::subscriptions()->delete(array $params)
\PleskXml::subscriptions()->get(array $params)
\PleskXml::subscriptions()->hosting(array $params)
\PleskXml::subscriptions()->limits(array $params)
\PleskXml::subscriptions()->permissions(array $params)
\PleskXml::subscriptions()->traffic(array $params)
```
### Tests
```sh
phpunit
```
- - - 