<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class ExternalMarket extends Resource
{
    /**
     * The id of the market.
     * @var Int
     */
    public $externalMarketId;

    /**
     * the market url
     * @var String
     */
    public $url;

    /**
     * The name of the market.
     * @var String
     */
    public $name;
}
