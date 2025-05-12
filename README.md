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
  - [Organization](#organization)
    - [Organization Suggestion](#organization-suggestion)
    - [Find Russian Organization](#find-russian-organization)
  - [Cleaner Methods](#cleaner-methods)
    - [Address Standardization](#address-standardization)
    - [Name Standardization](#name-standardization)
    - [Phone Standardization](#phone-standardization)
    - [Passport Standardization](#passport-standardization)
    - [Email Standardization](#email-standardization)
    - [Vehicle Standardization](#vehicle-standardization)
  - [Suggestion Methods](#suggestion-methods)
    - [Name Suggestion](#name-suggestion)
    - [Passport Unit Suggestion](#passport-unit-suggestion)
    - [Email Suggestion](#email-suggestion)
    - [Car Brand Suggestion](#car-brand-suggestion)
    - [Bank Suggestion](#bank-suggestion)
    - [Bank Lookup by ID](#bank-lookup-by-id)
  

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

## Organization

This facade provides powerful tools to search, validate, and autocomplete Russian legal entities and individual entrepreneurs (IEs) based on data from the official Russian registries (EGRUL and EGRIP).

It helps to:

- Autocomplete company names, INNs, or addresses while typing;
- Narrow results by region, status, type, or industry (OKVED);
- Speed up user input and reduce errors in forms or business logic;
- Get full company details (registration data, address, management, etc.).
- Perfect for autofill scenarios, client onboarding forms, or integration with enterprise directories.

### Organization Suggestion

Use this facade to search and autocomplete legal entities and individual entrepreneurs by name, INN, OGRN, address, or director name.

#### Basic Usage

```php
use BotGun\DaData\Facades\DaDataOrganization;

DaDataOrganization::suggestOrganization([
    'query' => 'мувмув'
]);

```

#### Supported Parameters

| Parameter         | Type    | Description                                                               |
| ----------------- | ------- | ------------------------------------------------------------------------- |
| `query`           | string  | Search string (required). Could be a name, INN, OGRN, address, etc.       |
| `count`           | integer | Max number of results to return (default: 10, max: 20).                   |
| `type`            | string  | Organization type: `LEGAL` (legal entity) or `INDIVIDUAL` (entrepreneur). |
| `status`          | array   | Filter by status: `ACTIVE`, `LIQUIDATING`, `LIQUIDATED`, `BANKRUPT`, etc. |
| `okved`           | string  | Filter by OKVED code (business activity code).                            |
| `locations`       | array   | Filter results by location (e.g. region, city).                           |
| `locations_boost` | array   | Prioritize results in certain locations.                                  |


#### Example with Advanced Filters

````php
DaDataOrganization::suggestOrganization([
    'query'             => 'авто',
    'count'             => 5,
    'type'              => 'LEGAL',
    'status'            => ['ACTIVE'],
    'okved'             => '45.11',
    'locations'         => [['region' => 'Москва']],
    'locations_boost'   => [['region' => 'Москва']]
]);

````

#### Docs

- [Official DaData documentation on organization suggestions](https://dadata.ru/api/suggest/party/)

### Find Russian Organization

Use this method to retrieve exact information about a Russian company or individual entrepreneur by INN, OGRN, or full name. Unlike the general suggestions, this method performs a precise match and returns full organization data — perfect for backend checks, form validation, or compliance workflows.

```php
use BotGun\DaData\Facades\DaDataOrganization;

DaDataOrganization::findRussianOrganization([
    'query'         => (string) $innOrOgrn,
    'count'         => (int) $limit,               // optional, default 1
    'kpp'           => (string) $kpp,              // optional
    'branch_type'   => 'MAIN'|'BRANCH',            // optional
    'type'          => 'LEGAL'|'INDIVIDUAL',       // optional
    'status'        => ['ACTIVE', 'LIQUIDATED'],   // optional
]);

```

#### Supported Parameters

| Parameter     | Type      | Description                                                                |
| ------------- | --------- | -------------------------------------------------------------------------- |
| `query`       | `string`  | **Required.** INN, OGRN, or full name of the legal entity or sole trader.  |
| `count`       | `integer` | Number of results to return (default: 1, max: 20).                         |
| `kpp`         | `string`  | KPP code — helps narrow down the branch when searching by INN.             |
| `branch_type` | `string`  | Branch type: `MAIN` (head office), `BRANCH` (subsidiary/branch).           |
| `type`        | `string`  | Organization type: `LEGAL` (legal entity), `INDIVIDUAL` (sole proprietor). |
| `status`      | `array`   | Filter by organization status: `ACTIVE`, `LIQUIDATED`, `LIQUIDATING`, etc. |

#### Docs

- [DaData: Find by ID](https://dadata.ru/api/find-party/)

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

Use this facade to implement autocomplete features in forms or UIs. All methods require a query key in the input array.

### Name Suggestion

```php
use BotGun\DaData\Facades\DaDataSuggestions;

DaDataSuggestions::name(['query' => 'иван']);
```

#### Features:

- Helps users quickly enter full names in forms
- Suggests surname, first name, and patronymic combinations
- Detects gender

#### Docs
- [Name suggestion documentation](https://dadata.ru/api/suggest/name/)

### Passport Unit Suggestion

```php
use BotGun\DaData\Facades\DaDataSuggestions;

DaDataSuggestions::passport(['query' => '770-']);
```

#### Features:

- Suggests issuing authorities for Russian passports
- Supports autocomplete for FMS unit codes

#### Docs
- [Passport unit suggestion](https://dadata.ru/api/suggest/fms_unit/)

### Email Suggestion

```php
use BotGun\DaData\Facades\DaDataSuggestions;

DaDataSuggestions::email(['query' => 'ivan@yand']);
```

#### Features:

- Autocompletes email addresses based on popular domains
- Useful for form inputs with typo correction

#### Docs
- [Email suggestion documentation](https://dadata.ru/api/suggest/email/)

### Car Brand Suggestion

```php
use BotGun\DaData\Facades\DaDataSuggestions;

DaDataSuggestions::carBrand(['query' => 'фо']);
```

#### Features:

- Suggests car makes and models
- Useful for auto-selection interfaces

#### Docs
- [Car brand suggestion](https://dadata.ru/api/suggest/car_brand/)

### Bank Suggestion

```php
use BotGun\DaData\Facades\DaDataSuggestions;

DaDataSuggestions::bank(['query' => 'сбербанк']);
```

#### Features:

- Suggests banks by name, BIK, SWIFT, INN, or correspondent account
- Returns complete bank info (address, status, license)

#### Docs
- [Bank suggestion documentation](https://dadata.ru/api/suggest/bank/)

### Bank Lookup by ID

```php
use BotGun\DaData\Facades\DaDataSuggestions;

DaDataSuggestions::bankById(['query' => '044525225']);
```

#### Features:

- Searches bank by exact BIK, SWIFT, INN, or correspondent account
- Use when you already have the identifier, not for autocomplete

#### Docs
- [Bank find by ID documentation](https://dadata.ru/api/find-bank/)
