<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Creatable;
use Muhammadrahban\Checkr\Traits\Deleteable;
use Muhammadrahban\Checkr\Traits\Listable;

class School extends AbstractResource
{
    use Listable, Creatable, Deleteable;

    /**
     * School constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setLoadPath('candidates/:candidate_id/schools/:id');
        $this->setCreatePath('candidates/:candidate_id/schools');
        $this->setListPath('candidates/:candidate_id/schools');
        $this->setDeletePath('candidates/:candidate_id/employers/:id');

        parent::__construct($values, $client);
    }
}
