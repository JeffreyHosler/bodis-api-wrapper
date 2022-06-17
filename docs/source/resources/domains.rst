Domains Resource
================

The domains resource has all the field the bodis api returns, with some additional functionality.


Delete 
______

When you get a domain from the api, you can call the delete function to delete that domain. This method calls Bodis::deleteDomain() behind the scenes.

.. code-block:: php
   :linenos:

   /* In this example, lets assume the response is returning one domain */
   $response = Bodis::searchDomains([
      'filters' => [
         'domains' => [
            'test.com'
         ]
      ]
   ]);

   /* grab the first domain */
   $domain = $response['data'][0];

   /* call the delete method */
   $domain->delete();

