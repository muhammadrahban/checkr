<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Creatable;
use Muhammadrahban\Checkr\Traits\Deleteable;
use Muhammadrahban\Checkr\Traits\Listable;

class Invitation extends AbstractResource
{
    use Listable, Creatable, Deleteable;

    /**
     * Invitation constructor.
     *
     * @param array|null $values
     * @param Client|null $client
     */
    public function __construct($values = null, Client $client = null)
    {
        parent::__construct($values, $client);
    }
}
