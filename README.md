# Google Places PHP Client

[![Build Status](https://img.shields.io/travis/plients/GooglePlaces-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/GooglePlaces-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/googleplaces.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/GooglePlaces-PHP-Client.svg?style=flat-square)](https://github.com/plients/GooglePlaces-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/GooglePlaces-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/GooglePlaces-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/googleplaces
```

## Usage

``` php
<?php

use Plients\Config;

$client = new Plients\GooglePlaces\Client();

$client->setConfig(new Config([
    'apiKey' => 'YOUR_APIKEY',
]));

$client->api('Search')->nearby([
    'location' => 'lat,lng',
    'radius' => 500,
    'keyword' => 'Some Business',
    'name' => 'Some Business',
]);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
