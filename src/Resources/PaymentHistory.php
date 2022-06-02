<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class PaymentHistory extends Resource
{
    /**
     * The payment date
     * @var String
     */
    public $date;

    /**
     * the description of the payment
     * @var String
     */
    public $description;

    /**
     * The income
     * @var String
     */
    public $income;

    /**
     * The payment modification
     * @var Float
     */
    public $modification;

	/**
     * The balance after payment
     * @var Float
     */
    public $balance;

	/**
     * The lifetime balance
     * @var Float
     */
    public $lifetimeBalance;

	/**
     * The payment addiational notes
     * @var String
     */
    public $additionalNotes;

	/**
     * The payment long notes
     * @var String
     */
    public $longNote;

	/**
     * The payment type
     * @var String
     */
    public $type;

	/**
     * The payment receipt
     * @var Object
     */
    public $receipt;
}
