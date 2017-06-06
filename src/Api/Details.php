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
 * Class Details.
 */
class Details extends AbstractApi
{
    /**
     * @param array $parameters
     *
     * @return mixed|object
     */
    public function retrieve(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('details');

        return $this->hydrateOne($response);
    }
}
