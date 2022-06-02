<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\DomainStatus;

trait Tools
{
    /**
     * check parking status of a domain
     * https://docs.bodis.com/#04d3124a-5c6e-4af2-8c42-60c5a96c611c
     *
     * @param  Array  $data
     * @return Array
     */
    public function domainStatus(array $data)
    {
        return $this->transformCollection(
            $this->post("tools/domain-status", $data),
            DomainStatus::class
		);
    }
}
