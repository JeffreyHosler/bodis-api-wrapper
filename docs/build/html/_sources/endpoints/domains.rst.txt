Domains
===========
Functions for the domains endpoint. See the `Official Documentation <https://docs.bodis.com/#b788b656-bf2d-4d4d-b6f4-445ad775a7a6>`_ for more information.

Search Domains
_______________

Use this endpoint to search for domains within a Bodis account.

.. code-block:: php
   :linenos:

   Bodis::searchDomains();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::searchDomains([
      'page' => 1,
      'per_page' => 25
      'filters' => [
         'domains' => [
            'test.com'
         ]
      ]
   ]);

Domains returned will be an array of the Domain Resource: Example Response
.. code-block:: 

   {
      "current_page": 1,
         "data": [
            0 => JeffreyHosler\BodisApiWrapper\Resources\Domain {
               +domainNameId: 0000000
               +domainName: "test.com"
               +domainNameDisplay: null
               +domainNameNoTld: "test"
               +domainNameLength: 4
               +tldName: ".com"
               +userId: 0000
               +notes: null
               +timeAddedToSystem: "2020-11-18 00:59:51"
               +timeAddedToUser: "2020-11-18 00:59:51"
               +isIdn: "n"
               +googleIsBanned: "n"
               +googleBannedReason: null
               +isAdult: "n"
               +adProvider: "G"
               +imprint: "false"
               +zeroclickDisabled: "false"
               +isZeroclickBanned: 0
               +preferredFeed: null
               +preferredFeedLastChangedBy: null
               +folderId: 0
               +folderName: "Test Folder"
               +userSuggestKeywords: "Test"
               +userSuggestKeywordsConflictStatus: "approved"
               +userRsKeywords: "Test, Folder, Test Folder"
               +userRsKeywordsConflictStatus: "approved"
	         }
	      ]
      "first_page_url": "https://api.bodis.com/v2/domains/search?page=1",
      "from": 1,
      "next_page_url": "https://api.bodis.com/v2/domains/search?page=2",
      "path": "https://api.bodis.com/v2/domains/search",
      "per_page": 2,
      "prev_page_url": null,
      "to": 2,
      "total": 3106,
      "last_page": 1553
   }


Add Domains
___________

Use this endpoint to add new domains to a Bodis account. 

.. code-block:: php
   :linenos:

   Bodis::addDomains([
      'domains' => [
         'test.com',
         'test2.com'
      ],
      'folder' => [
         'id' => 1,
         'apply_settings' => false
      ]
   ]);

The response will be a json response from Bodis that shows which domains succeeded and which ones failed

.. code-block:: php

   {
      "success" => [
         "example.com"
      ],
      "fail" => {
         "example.invalid": "TLD extension is currently not supported.",
         "example.org": "Domain name is already in your account."
      },
      "conflict" => [
         "example.net"
      ]
   }

Update Domains
______________

Use this endpoint to update domains within a Bodis account.

.. code-block:: php
   :linenos:

   Bodis::updateDomains([
      'domains' => [
         'test.com',
         'test2.com'
      ],
      'folder' => [
         'id' => 1,
         'apply_settings' => false
      ],
      'parking' => [
         'keywords' => [
            'master_keywords' => [
               'Test',
               'Test2'
            ],
            'related_search_terms' => [
               'Testing',
               'Tester'
            ]
         ]
      ]
   ]);

.. note::

   This endpoint does not return any content

Delete Domains

Use this endpoint to delete domains from a Bodis account.

______________

.. code-block:: php
   :linenos:

   Bodis::deleteDomains([
      'domains' => [
         'test.com',
         'test2.com'
      ]
   ]);

.. note::

   This endpoint does not return any content