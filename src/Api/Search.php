<?php

/*
 * This file is part of Google Places PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GooglePlaces\Api;

use BrianFaust\Unified\AbstractApi;

/**
 * Class Search.
 */
class Search extends AbstractApi
{
    /**
     * @param array $parameters
     *
     * @return mixed|object
     */
    public function nearby(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('nearbysearch');

        return $this->hydrateOne($response);
    }

    /**
     * @param array $parameters
     *
     * @return mixed|object
     */
    public function text(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('textsearch');

        return $this->hydrateOne($response);
    }

    /**
     * @param array $parameters
     *
     * @return mixed|object
     */
    public function radar(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('radarsearch');

        return $this->hydrateOne($response);
    }
}
