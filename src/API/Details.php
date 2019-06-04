<?php

declare(strict_types=1);

/*
 * This file is part of Google Places PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\GooglePlaces\API;

/**
 * Class Details.
 */
class Details extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function retrieve(array $parameters): HttpResponse
    {
        return $this->client->get('details', $parameters);
    }
}
