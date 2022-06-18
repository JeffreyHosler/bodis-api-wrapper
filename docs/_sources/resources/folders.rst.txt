Folders Resource
================

The folders resource has all the field the bodis api returns, with some additional functionality.


Delete 
______

When you get a folder from the api, you can call the delete function to delete that folder. This method calls Bodis::deleteFolder() behind the scenes.

.. code-block:: php
   :linenos:

   /* In this example, lets assume we want to delete the first folder */
   $response = Bodis::listFolders();

   /* grab the first domain */
   $folder = $response['data'][0];

   /* call the delete method */
   $folder->delete();

