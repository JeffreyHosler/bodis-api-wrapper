Resources
=========

Data fields returned from Bodis api are converted from snake case to camel case, and put into a resource.

For example, if you were to get a list of folders, the response from the raw api would be

.. code-block:: php

   "data": [
      {
         "id": 1,
         "total_domains": 3,
         "name": "Deal Domains"
      },
      {
         "id": null,
         "total_domains": 3103,
         "name": "Unassigned"
      }
   ],

With the resource, it is now

.. code-block:: php

   'data' => [
      0 => JeffreyHosler\BodisApiWrapper\Resources\Folder {
         id: 1
         totalDomains: 3
         name: "Deal Domains"
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\Folder {
         id: null
         totalDomains: 3103
         name: 'Unassigned'
      }
   ]

Some resources offer additional functionality. You can view all resources directly by clicking on `This Link <https://github.com/JeffreyHosler/bodis-api-wrapper/tree/main/src/Resources>_`

.. toctree::
   :hidden:

   domains
   folders

.. include:: map.rst.inc

.. note::

   Other resources do not have an additional functionality at this time.