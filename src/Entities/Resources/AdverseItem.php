<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Listable;

class AdverseItem extends AbstractResource
{
    use Listable;

    /**
     * AdverseItem constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setListPath('reports/:report_id/adverse_items');

        parent::__construct($values, $client);
    }
}
