<?php

namespace Muhammadrahban\Checkr\Entities\Resources;

use Muhammadrahban\Checkr\Client;
use Muhammadrahban\Checkr\Traits\Deleteable;
use Muhammadrahban\Checkr\Traits\Listable;
use Muhammadrahban\Checkr\Traits\Saveable;

class Employer extends AbstractResource
{
    use Listable, Saveable, Deleteable;

    /**
     * Employer constructor.
     *
     * @param null|string|array $values
     * @param null|Client $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setSavePath('candidates/:candidate_id/employers');
        $this->setLoadPath('candidates/:candidate_id/employers/:id');
        $this->setListPath('candidates/:candidate_id/employers');
        $this->setDeletePath('candidates/:candidate_id/employers/:id');

        parent::__construct($values, $client);
    }
}
