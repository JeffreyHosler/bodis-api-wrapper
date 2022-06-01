<?php

namespace JeffreyHosler\BodisApiWrapper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffreyHosler\BodisApiWrapper\BodisApiWrapper
 */
class Bodis extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bodis';
    }
}
