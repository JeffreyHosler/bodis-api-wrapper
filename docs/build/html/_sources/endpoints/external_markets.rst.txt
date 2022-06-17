External Markets
================
Functions for the External Markets endpoint. See the `Official Documentation <https://docs.bodis.com/#0523d788-ed87-4624-892b-7eb4b8d84f39>`_ for more information.

List External Markets
_____________________

Use this endpoint to obtain a list of external markets supported by Bodis.

.. code-block:: php
   :linenos:

   Bodis::listExternalMarkets();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listExternalMarkets();
      'page' => 1,
      'per_page' => 25
   ]);

External Markets returned will be an array of the ExternalMarket Resource: Example Response

.. code-block:: php

   'data' => [ 
      0 => JeffreyHosler\BodisApiWrapper\Resources\ExternalMarket {
         +externalMarketId: 00
         +url: 'https://www.test2.com'
         +name: 'Test2'
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\ExternalMarket {
         +externalMarketId: 00
         +url: 'https://www.test.com'
         +name: 'Test'
      }
   ]
   'current_page' => 1
   'first_page_url' => 'https://api.bodis.com/v2/external-markets?page=1'
   'from' => 1
   'last_page' => 1
   'last_page_url' => 'https://api.bodis.com/v2/external-markets?page=1'
   'next_page_url' => null
   'path' => 'https://api.bodis.com/v2/external-markets'
   'per_page' => 25
   'prev_page_url' => null
   'to' => 7
   'total' => 7