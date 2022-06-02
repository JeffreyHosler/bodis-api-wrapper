<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class PaymentRecord extends Resource
{
	/**
     * The payout record type
     * @var String
     */
    public $recordType;

    /**
     * the accounting period
     * @var String
     */
    public $accountingPeriod;

    /**
     * The date of the credit
     * @var String
     */
    public $accountingDate;

    /**
     * The status of the account period
     * @var String
     */
    public $accountingPeriodStatus;

	/**
     * The credit amount
     * @var Float
     */
    public $amount;

	/**
     * The details of the payment
     * @var Object
     */
    public $paymentDetailsJson;

	/**
     * The details of the transaction
     * @var String
     */
    public $transactionDetailsJson;

	/**
     * The method id
     * @var Int
     */
    public $paymentMethodId;

	/**
     * 
     * @var Float
     */
    public $totalWithheld;

	/**
     * 
     * @var String
     */
    public $creditDeductionTimeAdded;

	/**
     * 
     * @var String
     */
    public $creditDeductionType;

	/**
     * 
     * @var String
     */
    public $creditDeductionUserNote;
}