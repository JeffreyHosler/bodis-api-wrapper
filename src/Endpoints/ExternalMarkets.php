<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\ExternalMarket;

trait ExternalMarkets
{
    /**
     * Get the External Markets
     * https://docs.bodis.com/#0523d788-ed87-4624-892b-7eb4b8d84f39
     *
     * @param  Array  $data
     * @return Array
     */
    public function listExternalMarkets(array $data = [])
    {
        $response = $this->get("external-markets", $data);

        return array_merge($this->transformCollection(
            $response['data'] ?? [],
            ExternalMarket::class,
        ), array_filter($response, fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY));
    }
}
