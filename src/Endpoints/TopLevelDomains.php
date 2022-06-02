<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\TopLevelDomain;

trait TopLevelDomains
{
    /**
     * Get the top level domains
     * https://docs.bodis.com/#61afdf1f-7359-4395-a52b-75011413f65f
     *
     * @param  Array  $data
     * @return Array
     */
    public function listTlds(array $data = [])
    {
        $response = $this->get("tlds", $data);

        return array_merge($this->transformCollection(
            $response['data'] ?? [],
            TopLevelDomain::class,
        ), array_filter($response, fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY));
    }
}
