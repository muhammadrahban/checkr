<?php
/**
 * Created by PhpStorm.
 * User: Muhammadrahban
 * Date: 10/10/17
 * Time: 7:14 PM.
 */

namespace Muhammadrahban\Checkr\Laravel\Facades;

class Checkr extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Muhammadrahban.checkr';
    }
}
