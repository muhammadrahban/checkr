<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Deleteable;

class Geo extends AbstractResource
{
    use Deleteable;

    /**
     * Geo constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setHidden([
            'candidate_id',
            'report_id',
        ]);

        parent::__construct($values, $client);
    }
}
