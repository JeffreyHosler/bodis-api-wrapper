.. index::
    single: Tools

Tools
=====
Functions for the Tools endpoint. See the `Official Documentation <https://docs.bodis.com/#04d3124a-5c6e-4af2-8c42-60c5a96c611c>`_ for more information.

Domain Status
_____________________

Use this endpoint to check the parking status of domains.

.. code-block:: php
   :linenos:

   Bodis::domainStatus([
      'domains' => [
         'test.com',
         'test2.com'
      ]
   ]);

Data returned will be an array of the DomainStatus Resource: Example Response

.. code-block:: php

   "data" => [
      0 => JeffreyHosler\BodisApiWrapper\Resources\DomainStatus {
         +userId: 77127
         +domainName: "example.com"
         +isAdult: false
         +isFaillisted: true
         +faillistReason: "IMPERSONATED"
         +isBlocked: false
         +blockedReason: null
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\DomainStatus {
         +userId: 77127
         +domainName: "example.net"
         +isAdult: false
         +isFaillisted: false
         +faillistReason: null
         +isBlocked: false
         +blockedReason: null
      }
   ]