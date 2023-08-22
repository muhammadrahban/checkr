<?php

namespace Muhammadrahban\Checkr\Exceptions;

class ResourceNotCreated extends \Exception
{
    public function __construct($response)
    {
        $message = 'Object could not be created '.$response;
        parent::__construct($message);
    }
}
