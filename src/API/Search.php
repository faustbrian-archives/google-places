<?php

declare(strict_types=1);

/*
 * This file is part of Google Places PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GooglePlaces\API;

use BrianFaust\Http\HttpResponse;

class Search extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function nearby(array $parameters): HttpResponse
    {
        return $this->client->get('nearbysearch', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function text(array $parameters): HttpResponse
    {
        return $this->client->get('textsearch', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function radar(array $parameters): HttpResponse
    {
        return $this->client->get('radarsearch', $parameters);
    }
}
