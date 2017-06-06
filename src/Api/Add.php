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
 * Class Add.
 */
class Add extends AbstractApi
{
    /**
     * @param array $parameters
     *
     * @return mixed|object
     */
    public function add(array $parameters)
    {
        $this->setFormParameters($parameters);

        $response = $this->post('add');

        return $this->hydrateOne($response);
    }
}
