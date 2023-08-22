<?php

namespace Muhammadrahban\Checkr\Entities\Screenings;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Entities\AbstractEntity;

abstract class AbstractScreening extends AbstractEntity
{
    /**
     * AbstractScreening constructor.
     *
     * @param array|null|string $values
     * @param Client|null       $client
     */
    public function __construct($values, Client $client = null)
    {
        $this->checkFields = false;
        parent::__construct($values, $client);
    }
}
