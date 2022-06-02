<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\Report;

trait Reports
{
    /**
     * Get the reports data
     * https://docs.bodis.com/#cdaa92be-8cce-4a2a-be6b-a3be2a0cf82d
     *
     * @param  Array  $data
     * @return Array
     */
    public function searchReports(array $data)
    {
        $response = $this->post("reports/search", $data);

		$data = array_filter($response['metrics'], fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY);
		$data['data'] = $response['metrics']['data'];
		$data['subtotal'] = $response['subtotal'];
		$data['total'] = $response['total'];

        return array_merge($this->transformCollection(
            $data['data'] ?? [],
            Report::class,
        ), array_filter($data, fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY));
    }
}
