<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class Domain extends Resource
{
    /**
     * The id of the domain
     * @var Int
     */
    public $domainNameId;

	/**
     * The full domain name
     * @var String
     */
    public $domainName;

	/**
     * The domain diaplay name
     * @var String
     */
    public $domainNameDisplay;

	/**
     * The domain name without the tld
     * @var String
     */
    public $domainNameNoTld;

	/**
     * The length of the domain
     * @var Int
     */
    public $domainNameLength;

	/**
     * The domain tld
     * @var String
     */
    public $tldName;

    /**
     * the user id of who owns the domain
     * @var Int
	*/
	public $userId;

	/**
     * domain notes
     * @var String
     */
    public $notes;

	/**
     * the date added to bodis
     * @var String
     */
    public $timeAddedToSystem;

	/**
     * the date added to the user
     * @var String
     */
    public $timeAddedToUser;

	/**
     * is the domain an idn
     * @var String
     */
    public $isIdn;

	/**
     * is the domain banned on google
     * @var String
     */
    public $googleIsBanned;

	/**
     * reason for the google ban
     * @var String
     */
    public $googleBannedReason;

	/**
     * is the domain an adult domain (XXX :P)
     * @var String
     */
    public $isAdult;

	/**
     * domain ad provider
     * @var String
     */
    public $adProvider;

	/**
     * domain imprint
     * @var String
     */
    public $imprint;

	/**
     * zeroclick status
     * @var String
     */
    public $zeroclickDisabled;

	/**
     * zeroclick status
     * @var String
     */
    public $isZeroclickBanned;

	/**
     * the preferred feed
     * @var String
     */
    public $preferredFeed;

	/**
     * who changed the preferred feed
     * @var String
     */
    public $preferredFeedLastChangedBy;

	/**
     * the folder id the domain is in
     * @var Int|Null
     */
    public $folderId;

	/**
     * the folder name the domain is in
     * @var String|Null
     */
    public $folderName;

	/**
     * the user suggested keywords
     * @var String
     */
    public $userSuggestKeywords;

	/**
     * the user suggested keywords
     * @var String
     */
    public $userSuggestKeywordsConflictStatus;

	/**
     * the user suggested keywords
     * @var Array|Null
     */
    public $userRsKeywords;

	/**
     * the user suggested keywords
     * @var Bool|Null
     */
    public $userRsKeywordsConflictStatus;

    /**
     * Delete the domain.
     *
     * @return void
     */
    public function delete()
    {
        $this->http->deleteDomain([
			'domains' => [$this->domainName]
		]);
    }
}
