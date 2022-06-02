<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class DomainStatus extends Resource
{
    /**
     * The user id of who owns the domain
     * @var Int
     */
    public $userId;

    /**
     * The full domain name
     * @var String
     */
    public $domainName;

    /**
     * is the domain an adult domain (XXX :P)
     * @var Bool
     */
    public $isAdult;

    /**
     * is the domain faillisted
     * @var Bool
     */
    public $isFaillisted;

    /**
     * faillist reason
     * @var String
     */
    public $faillistReason;

    /**
     * is the domain blocked
     * @var Bool
     */
    public $isBlocked;

    /**
     * the preferred feed
     * @var String
     */
    public $blockedReason;
}
