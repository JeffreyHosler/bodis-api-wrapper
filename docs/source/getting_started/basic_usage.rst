Basic Usage
===========
To start using the wrapper, include the Bodis Facade. 

.. code-block:: php
   :linenos:

   use Bodis;

   /* get a list of domains */
   $domains = Bodis::listDomains();

   /* get a list of folders */
   $folders = Bodis::listFolders();

You can also create an instance if you want.

.. code-block:: php
   :linenos:

   use Bodis;

   /* use default token from config */
   $bodis = new Bodis();

   /* get a list of domains */
   $domains = $bodis::listDomains();

   /* get a list of folders */
   $folders = $bodis::listFolders();

If you have multiple keys, you can change them by the above method and including your api key 

.. code-block:: php
   :linenos:

   use Bodis;

   /* will use default token in your config */
   $bodis = new Bodis();

   /* will use the token you specify */
   $bodis = new Bodis($token);