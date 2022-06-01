<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\Domain;

trait Domains
{
	/**
     * Add new domains to bodis
	 * https://docs.bodis.com/#3bdc3937-af17-461b-9da6-b61560228242
     *
     * @param  Array  $data
     * @return Array
     */
    public function addDomains(array $data)
    {
		$response = $this->post("domains", $data);

        return $response;
    }

	/**
     * Search for domains
	 * https://docs.bodis.com/#bdb27baa-7a14-4bed-9187-80bdc1c721e8
     *
     * @param  Array  $data
     * @return Array
     */
    public function searchDomains(array $data = [])
    {
		$response = $this->post("domains/search", $data);
		
        return array_merge($this->transformCollection(
            $response['data'],
            Domain::class,
        ), array_filter($response, fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY));
    }

	/**
     * update domains
	 * https://docs.bodis.com/#32210409-59f3-4cde-81a0-90929d23fd15
     *
     * @param  Array  $data
     * @return null
     */
    public function updateDomains(array $data)
    {
		$this->put("domains", $data);
		
        return;
    }

	/**
     * delete domains
	 * https://docs.bodis.com/#15b8cad6-61da-4a0a-ad14-a38b8a024e4e
     *
     * @param  Array  $data
     * @return null
     */
    public function deleteDomains(array $data)
    {
		$this->delete("domains", $data);
		
        return;
    }

}