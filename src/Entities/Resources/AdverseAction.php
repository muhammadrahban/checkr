<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Creatable;
use Muhammadrahban\Checkr\Traits\Deleteable;
use Muhammadrahban\Checkr\Traits\Listable;

class AdverseAction extends AbstractResource
{
    use Creatable, Listable, Deleteable;

    /**
     * AdverseAction constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setCreatePath('reports/:report_id/adverse_actions');
        $this->setDeletePath('reports/:report_id/adverse_actions');

        parent::__construct($values, $client);
    }
}
