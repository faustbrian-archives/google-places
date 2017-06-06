# Google Places PHP Client

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

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
