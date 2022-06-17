Reports
=======
Functions for the Reports endpoint. See the `Official Documentation <https://docs.bodis.com/#cdaa92be-8cce-4a2a-be6b-a3be2a0cf82d>`_ for more information.

Search Reports
_____________________

Use this endpoint to obtain reporting data for a Bodis account.

.. code-block:: php
   :linenos:

   Bodis::searchReports([
      'report_type' => 'day',
      'order_by': 'date'
   ]);

Data returned will be an array of the Report Resource: Example Response

.. code-block:: php

  'data' => [
      0 => JeffreyHosler\BodisApiWrapper\Resources\Report {
         +date: '2017-10-13'
         +visits: 920
         +landingPageVisits: 891
         +zeroclickVisits: 29
         +clicks: 215
         +creditedRevenue: 204.16
         +landingPageCreditedRevenue: 203.82
         +zeroclickCreditedRevenue: 0.34
         +ctr: 24.13
         +epc: 0.95
         +rpm: 221.91
         +landingPageRpm: 228.75
         +zeroclickRpm: 11.72
         +isFinalized: true
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\Report {
         +date: '2017-10-13'
         +visits: 281
         +landingPageVisits: 120
         +zeroclickVisits: 19
         +clicks: 100
         +creditedRevenue: 55.12
         +landingPageCreditedRevenue: 12.12
         +zeroclickCreditedRevenue: 0.12
         +ctr: 5.23
         +epc: 0.32
         +rpm: 120.12
         +landingPageRpm: 100.00
         +zeroclickRpm: 1.23
         +isFinalized: false
      }
   ]
   'current_page' => 1
   'first_page_url' => 'https://api.bodis.com/v2/reports/search?page=1'
   'from' => 1
   'last_page' => 185
   'last_page_url' => 'https://api.bodis.com/v2/reports/search?page=185'
   'next_page_url' => 'https://api.bodis.com/v2/reports/search?page=2'
   'path' => 'https://api.bodis.com/v2/reports/search'
   'per_page' => 5
   'prev_page_url' => null
   'to' => 5
   'subtotal' => [
      'landing_page_visits': 3556,
      'zeroclick_visits': 110,
      'visits': 3666,
      'clicks': 774,
      'ctr': 21.77,
      'epc': 1.01,
      'rpm': 213.79,
      'landing_page_rpm': 220.17,
      'zeroclick_rpm': 7.73,
      'credited_revenue': 783.76,
      'landing_page_credited_revenue': 782.91,
      'zeroclick_credited_revenue': 0.85
   },
   'total' => [
      'visits': 11835,
      'landing_page_visits': 11621,
      'zeroclick_visits': 214,
      'clicks': 2645,
      'credited_revenue': 3143.2,
      'landing_page_credited_revenue': 3141.8,
      'zeroclick_credited_revenue': 1.4,
      'ctr': 22.76,
      'epc': 1.19,
      'rpm': 265.59,
      'landing_page_rpm': 270.36,
      'zeroclick_rpm': 6.54
   ]
   