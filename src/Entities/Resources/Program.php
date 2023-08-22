<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Listable;

class Program extends AbstractResource
{
    use Listable;

    /**
     * Program constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        parent::__construct($values, $client);
    }
}
