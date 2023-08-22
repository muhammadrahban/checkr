<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Creatable;
use Muhammadrahban\Checkr\Traits\Saveable;

class Report extends AbstractResource
{
    use Creatable, Saveable;

    /**
     * Report constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        parent::__construct($values, $client);
    }
}
