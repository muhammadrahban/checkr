<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Creatable;
use Muhammadrahban\Checkr\Traits\Deleteable;
use Muhammadrahban\Checkr\Traits\Listable;
use Muhammadrahban\Checkr\Traits\Saveable;

class Candidate extends AbstractResource
{
    use Creatable, Saveable, Listable, Deleteable;

    /**
     * Candidate constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        parent::__construct($values, $client);
    }
}
