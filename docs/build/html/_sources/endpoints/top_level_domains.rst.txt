Top Level Domains
=================
Functions for the top Level Level Domains endpoint. See the `Official Documentation <https://docs.bodis.com/#36d651c4-0c31-4ab9-bc66-35ef2ad24c09>`_ for more information.

List Top Level Domains
______________________

Use this endpoint to obtain a list of top-level domains supported by Bodis.

.. code-block:: php
   :linenos:

   Bodis::listTlds();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listTlds();
      'page' => 2,
      'per_page' => 25
   ]);

Data returned will be an array of the TopLevelDomain Resource: Example Response

.. code-block:: php

   'data' => [
      0 => JeffreyHosler\BodisApiWrapper\Resources\TopLevelDomain
         +tldName: '.000.nl'
         +tldExtension: '.nl'
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\TopLevelDomain
         +tldName: '.2000.hu'
         +tldExtension: '.hu'
      }
   ]
   'current_page' => 1
   'first_page_url' => 'https://api.bodis.com/v2/tlds?page=1'
   'from' => 1
   'last_page' => 113
   'last_page_url' => 'https://api.bodis.com/v2/tlds?page=113'
   'next_page_url' => 'https://api.bodis.com/v2/tlds?page=2'
   'path' => 'https://api.bodis.com/v2/tlds'
   'per_page' => 25
   'prev_page_url' => null
   'to' => 25
   'total' => 2820
   ]