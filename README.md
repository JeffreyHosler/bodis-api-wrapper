# Bodis API Wrapper

## Introduction

This package provides a lightweight interface for interacting with Bodis's API

## Official Documentation

Documentation on the api can be found [here](https://docs.bodis.com/)

### Installation

To install the SDK in your project you need to require the package via composer:

```
composer require  JeffreyHosler/bodis-api-wrapper 
```

Add the config
```
php artisan vendor:publish --provider="JeffreyHosler\BodisApiWrapper\BodisApiWrapperServiceProvider"
```

### Basic Usage

```php
use Bodis;

$domains = Bodis::listDomains();
$folders = Bodis::listFolders();

```

You can also create an instance
```php
use Bodis;

/* use default token from config */
$bodis = new Bodis();

/* use a different token */
$bodis = new Bodis($token);

$domains = $bodis::listDomains();
$folders = $bodis::listFolders();
```

If you want, you can adjust the timeout and number of retries.
| Value      | Default |
| ----------- | ----------- |
| Timeout      | 30 seconds       |
| Retries   | 3 attempts, 100 miliseconds between each attempt        |

```php
/* timeout */
$bodis = Bodis::timeout(40)
    ->retries(2, 200)
    ->searchDomains();
```

## Domains
Functions for the domains endpoint. See the [Official Documentation](https://docs.bodis.com/#b788b656-bf2d-4d4d-b6f4-445ad775a7a6) for more information.

```php
/* search for domains */
Bodis::searchDomains();

/* add domains */
Bodis::addDomains();

/* update domains */
Bodis::updateDomains();

/* delete domains */
Bodis::deleteDomains();

```

You can pass parameters into the functions.

```php
$response = Bodis::searchDomains([
    'domains' => [
        'test.com',
        'test2.com'
    ],
    'per_page' => 5
]));
```

Search Domains will return a collection of domains with some helpful functions. (more coming soon. maybe)
```php
    /* if you wanted to delete the first domain from bodis, you can call the delete helper which will make the api call for you */
    $domain = $response['data'][0];
    $domain->delete();

```

## Folders

Functions for the folders endpoint. See the [Official Documentation](https://docs.bodis.com/#da140e7f-ab86-4511-b544-77c424f0ff3f) for more information.
```php
/* list folders */
Bodis::listFolders();

/* add folder */
Bodis::addFolder();

/* update folder */
Bodis::updateFolder();

/* delete folder */
Bodis::deleteFolder();

```

You can pass parameters into the functions.

```php
$response = Bodis::listFolders([
    'page' => 2
]));
```

List Folders will return a collection of folders with some helpful functions. (more coming soon. maybe)
```php
    /* if you wanted to delete the first folder from bodis, you can call the delete helper which will make the api call for you */
    $folder = $response['data'][0];
    $folder->delete();

```

## External Markets

Functions for the External Markets endpoint. See the [Official Documentation](https://docs.bodis.com/#42f3396e-4fbc-4ef9-ad5b-420620638a17) for more information.
```php
/* list external markets */
Bodis::listExternalMarkets();

```

You can pass parameters into the functions.

```php
$response = Bodis::listExternalMarkets([
    'page' => 2
]));
```

## Payments

Functions for the Payments endpoint. See the [Official Documentation](https://docs.bodis.com/#ef152316-a906-4d0e-994f-da2e4a347a43) for more information.
```php
/* list payment history */
Bodis::listPaymentHistories();

/* list credits */
Bodis::listCredits();

/* list payouts */
Bodis::listPayouts();

/* list deductions */
Bodis::listDeductions();

/* list fees */
Bodis::listFees();
```

You can pass parameters into the functions.

```php
$response = Bodis::listPaymentHistories([
    'start_date' => '2015-08-31'
]));
```

## Top Level Domains

Functions for the Top Level Domains endpoint. See the [Official Documentation](https://docs.bodis.com/#61afdf1f-7359-4395-a52b-75011413f65f) for more information.
```php
/* list the top level domains */
Bodis::listTlds();
```

You can pass parameters into the functions.

```php
$response = Bodis::listTlds([
    'page' => 2
]));
```

## Reports

Functions for the Reports endpoint. See the [Official Documentation](https://docs.bodis.com/#d854c3e4-f1fa-40ce-9350-8aa54604959b) for more information.
```php
/* search for reports */
Bodis::searchReports([ 
        'report_type' => 'day',
        'page' => 2
    ]);
```

## Reports

Functions for the Tools endpoint. See the [Official Documentation](https://docs.bodis.com/#d70beb86-732b-4d91-8d74-fcc1fd30a5fd) for more information.
```php
/* get the status of the domains */
Bodis::domainStatus([ 
    'domains' => [
        'test.com',
        'test2.com'
    ]
]);
```

## Contributing

If you found this helpful, feel free to contribute! Feel free to [donate through paypal](https://www.paypal.com/paypalme/jeffhosler), sponsor, or submit a PR for any bugs, changes, additions. 

## License

Open-sourced software licensed under the [MIT license](LICENSE.md).
