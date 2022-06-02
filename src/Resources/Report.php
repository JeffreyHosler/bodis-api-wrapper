<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class Report extends Resource
{
    /**
     * The date of the report
     * @var String
     */
    public $date;

    /**
     * The how many visits
     * @var Int
     */
    public $visits;

	/**
     * The how many landing visits
     * @var Int
     */
    public $landingPageVisits;

	/**
     * The how many zeroclick visits
     * @var Int
     */
    public $zeroclickVisits;

	/**
     * The how many clicks 
     * @var Int
     */
    public $clicks;

	/**
     * How much reveneue earned
     * @var Float
     */
    public $creditedRevenue;

	/**
     * How much reveneue earned from langing pages
     * @var Float
     */
    public $landingPageCreditedRevenue;

	/**
     * How much reveneue earned from zero click
     * @var Float
     */
    public $zeroclickCreditedRevenue;

	/**
     * @var Float
     */
    public $ctr;

	/**
     * @var Float
     */
    public $epc;

	/**
     * @var Float
     */
    public $rpm;

	/**
     * @var Float
     */
    public $landingPageRpm;

	/**
     * @var Float
     */
    public $zeroclickRpm;

	/**
     * @var Bool
     */
    public $isFinalized;
}
