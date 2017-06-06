<?php

/*
 * This file is part of Google Places PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GooglePlaces;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\GooglePlaces\Request\Modifiers\ApiKeyModifier;

/**
 * Class HttpClient.
 */
class HttpClient extends AbstractHttpClient
{
    /**
     * {@inheritdoc}
     */
    protected $options = [
        'base_uri' => 'https://maps.googleapis.com/maps/api/place/',
        'headers' => [
           'User-Agent' => 'GooglePlaces-PHP-Client/0.1.0',
        ],
    ];

    protected $requestModifiers = [ApiKeyModifier::class];

    /**
     * {@inheritdoc}
     */
    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri.$path.'/json';
    }
}
