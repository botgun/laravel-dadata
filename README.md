# <a href="https://botgun.ru/" target="_blank"><img src="https://avatars.githubusercontent.com/u/121749444?s=400&u=682a6bac6ba993a2a90ec220cfa205540d9d684b&v=4" width="20"></a> DaData Laravel SDK Package
[![Latest Stable Version](http://poser.pugx.org/botgun/dadata/v)](https://packagist.org/packages/botgun/dadata)
[![Total Downloads](http://poser.pugx.org/botgun/dadata/downloads)](https://packagist.org/packages/botgun/dadata)
[![Latest Unstable Version](http://poser.pugx.org/botgun/dadata/v/unstable)](https://packagist.org/packages/botgun/dadata)
[![License](http://poser.pugx.org/botgun/dadata/license)](https://packagist.org/packages/botgun/dadata)
[![PHP Version Require](http://poser.pugx.org/botgun/dadata/require/php)](https://packagist.org/packages/botgun/dadata)

DaData is an SDK designed to facilitate easy interaction with the DaData API, allowing seamless integration of DaData functionalities within your Laravel applications. This package supports address and company data management for Russia, Belarus, and Kazakhstan.

## Features

 - Easy integration with the DaData API.
 - Support for handling addresses and company data across Russia, Belarus, and Kazakhstan.
 - Compatible with Laravel 10 and 11, PHP version 8.

## Installation

#### Installation

Install the package via Composer:

```shell
composer require botgun/DaData
```

#### Register the Service Provider
After installing the package, you need to register the DaData service provider. Add the following line to the providers array in your `config/app.php` file:

```phpt
...
'providers' => [
    ...
    BotGun\DaData\DaDataServiceProvider::class,
    
    ...
],
```

#### Publish the Configuration

After installation, publish the configuration file to set up the package with Laravel:

```shell
php artisan vendor:publish --provider='BotGun\DaData\DaDataServiceProvider'
```

## Configuration

Once the configuration file is published, you can set up your DaData credentials in your `.env` file. Obtain your API key and secret key from the DaData dashboard and set them as follows:

```phpt
...

DADATA_KEY=your_dadata_api_key_here
DADATA_SECRET_KEY=your_dadata_secret_key_here
```

These keys will allow your application to authenticate requests to the DaData API.
