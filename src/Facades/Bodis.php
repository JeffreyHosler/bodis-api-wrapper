<?php

namespace JeffreyHosler\BodisApiWrapper\Facades;

use Illuminate\Support\Facades\Facade;
use JeffreyHosler\BodisApiWrapper\Bodis as BodisClient;

/**
 * @see \JeffreyHosler\BodisApiWrapper\BodisApiWrapper
 */
class Bodis extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BodisClient::class;
    }
}