Installation
===============
To install the SDK in your project you need to require the package via composer:

.. code-block::

   composer require  JeffreyHosler/bodis-api-wrapper

Add the config
--------------

.. code-block::

   php artisan vendor:publish --provider="JeffreyHosler\BodisApiWrapper\BodisApiWrapperServiceProvider"


Add Enviroment Varibles
-----------------------
In your env, add these two lines

.. code-block::
   
   BODIS_API_URL=https://api.bodis.com/v2/
   BODIS_API_TOKEN=<your api token>
