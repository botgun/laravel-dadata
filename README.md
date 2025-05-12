# <a href="https://botgun.ru/" target="_blank"><img src="https://avatars.githubusercontent.com/u/121749444?s=400&u=682a6bac6ba993a2a90ec220cfa205540d9d684b&v=4" width="20"></a> DaData Laravel SDK Package
[![Latest Stable Version](http://poser.pugx.org/botgun/dadata/v)](https://packagist.org/packages/botgun/dadata)
[![Total Downloads](http://poser.pugx.org/botgun/dadata/downloads)](https://packagist.org/packages/botgun/dadata)
[![Latest Unstable Version](http://poser.pugx.org/botgun/dadata/v/unstable)](https://packagist.org/packages/botgun/dadata)
[![License](http://poser.pugx.org/botgun/dadata/license)](https://packagist.org/packages/botgun/dadata)
[![PHP Version Require](http://poser.pugx.org/botgun/dadata/require/php)](https://packagist.org/packages/botgun/dadata)

DaData is an SDK designed to facilitate easy interaction with the DaData API, allowing seamless integration of DaData functionalities within your Laravel applications. This package supports address and company data management for Russia, Belarus, and Kazakhstan.

- [Features](#features)
- [Installation](#installation)
  - [Register the Service Provider](#register-the-service-provider)
  - [Publish the Configuration](#publish-the-configuration)
- [Configuration](#configuration) 
- [API](#api)
  - [Cleaner Methods](#cleaner-methods)
    - [Address Standardization](#address-standardization)
    - [Name Standardization](#name-standardization)
    - [Phone Standardization](#phone-standardization)
    - [Passport Standardization](#passport-standardization)
    - [Email Standardization](#email-standardization)
    - [Vehicle Standardization](#vehicle-standardization)
  

# Features

 - Easy integration with the DaData API.
 - Support for handling addresses and company data across Russia, Belarus, and Kazakhstan.
 - Compatible with Laravel 10 and 11, PHP version 8.

# Installation

Install the package via Composer:

```shell
composer require botgun/dadata
```

## Register the Service Provider
After installing the package, you need to register the DaData service provider.

Up to and including Laravel 10, add the following line to the providers array in your `config/app.php` file:

```php
...
'providers' => [
    ...
    BotGun\DaData\DaDataServiceProvider::class,
    
    ...
]
```

From Laravel versions 11 and above, you may edit `bootstrap/providers.php` file:

```php
<?php

return [
    ...
    BotGun\DaData\DaDataServiceProvider::class,
];

```

## Publish the Configuration

After installation, publish the configuration file to set up the package with Laravel:

```shell
php artisan vendor:publish --provider='BotGun\DaData\DaDataServiceProvider'
```

# Configuration

Once the configuration file is published, you can set up your DaData credentials in your `.env` file. Obtain your API key and secret key from the DaData dashboard and set them as follows:

```php
...

DADATA_KEY=your_dadata_api_key_here
DADATA_SECRET_KEY=your_dadata_secret_key_here
```

These keys will allow your application to authenticate requests to the [DaData API](https://dadata.ru/profile/#info).

# API

## Cleaner Methods

The following data types can be standardized (cleaned):

### Address Standardization

```php
use BotGun\DaData\Facades\DaDataCleaner;

DaDataCleaner::address('Красная площадь, дом 1');
```

#### Features:

- Parses full address into structured fields (region, city, street, house, flat)
- Provides postal code using Russian Post data
- Identifies coordinates (geocoding)
- Detects district, metro station, apartment price and area
- Returns KLADR, FIAS (GAR), OKATO, OKTMO, and tax office codes
- Identifies cadastral number (Russia only)

#### Docs

- [Geocoding](https://dadata.ru/api/geocode/)
- [Cadastral number](https://dadata.ru/api/cadastre-clean/)
- [Address standardization](https://dadata.ru/api/clean/address/)

### Name Standardization

```php
use BotGun\DaData\Facades\DaDataCleaner;

DaDataCleaner::name('иванов иван');
```

#### Features:

- Fixes typos and transliteration
- Detects gender
- Provides grammatical inflection

#### Docs
- [Name clean documentation](https://dadata.ru/api/clean/name/)

### Phone Standardization

```php
use BotGun\DaData\Facades\DaDataCleaner;

DaDataCleaner::phone('+7 (999) 123-45-67');
```

#### Features:

- Validates phone number
- Corrects city code (DEF-code)
- Determines mobile operator (with MNP support)
- Detects country, region, city, timezone

#### Docs

- [Phone clean documentation](https://dadata.ru/api/clean/phone/)

### Passport Standardization

⚠️ Note: Due to issues with the МВД database, data is current as of June 21, 2023.

```php
use BotGun\DaData\Facades\DaDataCleaner;

DaDataCleaner::passport('1234 567890');
```

#### Features:

- Validates format
- Checks against invalid passports registry

#### Docs

- [Passport clean documentation](https://dadata.ru/api/clean/passport/)

### Email Standardization

```php
use BotGun\DaData\Facades\DaDataCleaner;

DaDataCleaner::email('ivan@yande.ru');
```

#### Features:

- Validates email format
- Fixes common typos
- Detects disposable emails
- Classifies as personal, corporate, or role-based

#### Docs 

- [Email clean documentation](https://dadata.ru/api/clean/email/)

### Vehicle Standardization

```php
use BotGun\DaData\Facades\DaDataCleaner;

DaDataCleaner::vehicle('Форд Фокус');
```

#### Features:

- Recognizes car make and model

#### Docs
- [Vehicle clean documentation](https://dadata.ru/api/clean/vehicle/)

## Suggestion Methods


