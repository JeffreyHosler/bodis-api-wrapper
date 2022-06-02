<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\Credit;
use JeffreyHosler\BodisApiWrapper\Resources\Deduction;
use JeffreyHosler\BodisApiWrapper\Resources\Fee;
use JeffreyHosler\BodisApiWrapper\Resources\PaymentHistory;
use JeffreyHosler\BodisApiWrapper\Resources\Payout;

trait Payments
{
    /**
     * Get the payment history
     * https://docs.bodis.com/#2eddfa08-fd65-4c2e-ba8e-1b4bf09bd0c7
     *
     * @param  Array  $data
     * @return Array
     */
    public function listPaymentHistories(array $data = [])
    {
        return $this->transformCollection(
            $this->get("account/revenue", $data),
            PaymentHistory::class
		);
    }

	/**
     * Get the credits
     * https://docs.bodis.com/#16498d81-6e12-4d1b-8a83-0f374a80582c
     *
     * @param  Array  $data
     * @return Array
     */
    public function listCredits(array $data = [])
    {
        return $this->transformCollection(
            $this->get("account/revenue/credits", $data),
            Credit::class
        );
    }

	/**
     * Get the payouts
     * https://docs.bodis.com/#9f5cf147-605d-49f3-a288-1c2756985392
     *
     * @param  Array  $data
     * @return Array
     */
    public function listPayouts(array $data = [])
    {
        return $this->transformCollection(
            $this->get("account/revenue/payouts", $data),
            Payout::class,
        );
    }

	/**
     * Get the deductions
     * https://docs.bodis.com/#0278f49d-b4e7-428e-a076-40c14d29b7f7
     *
     * @param  Array  $data
     * @return Array
     */
    public function listDeductions(array $data = [])
    {
        $response = $this->get("account/revenue/deductions", $data);

        return $this->transformCollection(
            $response,
            Deduction::class,
        );
    }

	/**
     * Get the fees
     * https://docs.bodis.com/#bd0e02a4-8f60-459d-a4ab-d1203be0b14b
     *
     * @param  Array  $data
     * @return Array
     */
    public function listFees(array $data = [])
    {
        $response = $this->get("account/revenue/fees", $data);

        return array_merge($this->transformCollection(
            $response['data'] ?? [],
            Fee::class,
        ), array_filter($response, fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY));
    }
}
