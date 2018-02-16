# Google Places PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/GooglePlaces-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/GooglePlaces-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/googleplaces-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/GooglePlaces-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/GooglePlaces-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/GooglePlaces-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/GooglePlaces-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/googleplaces-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\GooglePlaces\Client();

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

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
