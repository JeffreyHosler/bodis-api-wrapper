Payments
===========
Functions for the payments endpoint. See the `Official Documentation <https://docs.bodis.com/#ef152316-a906-4d0e-994f-da2e4a347a43>`_ for more information.

List Payment History
____________________

Use this endpoint to obtain a Payment History for your account within an optional date range.

.. code-block:: php
	:linenos:

	Bodis::listPaymentHistories();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listPaymentHistories([
      'start_date' => 2015-08-31,
      'end_date' => 2016-11-29
   ]);

Payments returned will be an array of the PaymentHistory Resource: Example Response

.. code-block:: php
   
   'data' => [▼
      0 => JeffreyHosler\BodisApiWrapper\Resources\PaymentHistory {
         +date: 'Dec 7, 2016'
         +description: 'Payout to ACH ending in XXXX'
         +income: ''
         +modification: 8540.43
         +balance: 1040.43
         +lifetimeBalance: 161328.29
         +additionalNotes: 'Pending'
         +longNote: null
         +type: 'earnings'
         +receipt: [▼
            'record_type' => 'payout'
            'accounting_period' => '2021-08-01'
            'accounting_date' => '2021-09-07'
            'amount' => 12190.65
            'credit_deduction_type' => ''
            'credit_deduction_user_note' => null
            'balance' => 0
            'modification' => 12190.65
            'lifetime_balance' => 147612.67
            'payment_method' => 'ACH ending in 6609'
         ]
      }
      0 => JeffreyHosler\BodisApiWrapper\Resources\PaymentHistory {
         +date: 'Dec 7, 2016'
         +description: 'Google Chargeback Deduction'
         +income: ''
         +modification: 8540.43
         +balance: 1040.43
         +lifetimeBalance: 161328.29
         +additionalNotes: 'Pending'
         +longNote: null
         +type: 'earnings'
         +receipt: ''
      }

List Credits
____________

Use this endpoint to obtain a list of Credits for your account given during an optional date range.

.. code-block:: php
	:linenos:

	Bodis::listCredits();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listCredits([
      'start_date' => 2015-08-31,
      'end_date' => 2016-11-29
   ]);

Payments returned will be an array of the Credit Resource: Example Response

.. code-block:: php
   
   'data' => [
      0 => JeffreyHosler\BodisApiWrapper\Resources\Credit {
         +recordType: 'credit'
         'accounting_period': '2015-09-01 00:00:00'
         'accounting_date': '2015-09-30'
         +accountingPeriodStatus: null
         +amount: 34.92
         +paymentDetailsJson: null
         +transactionDetailsJson: null
         +paymentMethodId: null
         +totalWithheld: null
         +creditDeductionTimeAdded: '2015-09-25 20:55:46'
         +creditDeductionType: 'DOWNTIME'
         +creditDeductionUserNote: 'Credit for network downtime.'
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\Credit {
         +recordType: 'credit'
         +accountingPeriod: '2015-11-01 00:00:00'
         +accountingDate: '2015-11-30'
         +accountingPeriodStatus: null
         +amount: 38.43
         +paymentDetailsJson: null
         +transactionDetailsJson: null
         +paymentMethodId: null
         +totalWithheld: null
         +creditDeductionTimeAdded: '2015-12-02 13:58:22'
         +creditDeductionType: 'DOWNTIME'
         +creditDeductionUserNote: 'Parking Revenue'
      }
   ]


List Payouts
____________

Use this endpoint to obtain a list of Payouts for your account given during an optional date range.

.. code-block:: php
	:linenos:

	Bodis::listPayouts();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listPayouts([
      'start_date' => 2015-08-31,
      'end_date' => 2016-11-29
   ]);

Payments returned will be an array of the Payout Resource: Example Response

.. code-block:: php
   
   'data' => [▼
      0 => JeffreyHosler\BodisApiWrapper\Resources\Payout {
         +recordType: 'payout'
         +accountingPeriod: '2007-08-01 00:00:00'
         +accountingDate: '2007-09-17'
         +accountingPeriodStatus: null
         +amount: 137.5
         +payment_details_json: '{\'ach_account_number\': \'XXXXXXXXX\', \'ach_account_owner\': \'PRIMO TRAFFIC LTD\', \'ach_routing_number\': \'XXXXXXXXXXXXX\'}',        
         +transactionDetailsJson: null
         +paymentMethodId: 2
         +totalWithheld: null
         +creditDeductionTimeAdded: null
         +creditDeductionType: null
         +creditDeductionUserNote: null
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\Payout {
         +recordType: 'payout'
         +accountingPeriod: '2008-08-01 00:00:00'
         +accountingDate: '2008-09-17'
         +accountingPeriodStatus: null
         +amount: 165
         +payment_details_json: '{\'ach_account_number\': \'XXXXXXXXX\', \'ach_account_owner\': \'PRIMO TRAFFIC LTD\', \'ach_routing_number\': \'XXXXXXXXXXXXX\'}',         
         +transactionDetailsJson: null
         +paymentMethodId: 2
         +totalWithheld: null
         +creditDeductionTimeAdded: null
         +creditDeductionType: null
         +creditDeductionUserNote: null
      }
   ]

List Deduction
______________

Use this endpoint to obtain a list of Deductions for your account given during an optional date range.

.. code-block:: php
	:linenos:

	Bodis::listDeductions();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listDeductions([
      'start_date' => 2015-08-31,
      'end_date' => 2016-11-29
   ]);

Payments returned will be an array of the Deduction Resource: Example Response

.. code-block:: php
   
   "data" => [▼
      0 => JeffreyHosler\BodisApiWrapper\Resources\Deduction {
         +recordType: "deduction"
         +accountingPeriod: "2014-03-01 00:00:00"
         +accountingDate: "2014-03-31"
         +accountingPeriodStatus: null
         +amount: 1.65
         +paymentDetailsJson: null
         +transactionDetailsJson: null
         +paymentMethodId: null
         +totalWithheld: null
         +creditDeductionTimeAdded: "2014-04-05 01:32:22"
         +creditDeductionType: "GOOGLE_CHARGEBACK"
         +creditDeductionUserNote: null
      }
      1 => JeffreyHosler\BodisApiWrapper\Resources\Deduction {
         +recordType: "deduction"
         +accountingPeriod: "2015-03-01 00:00:00"
         +accountingDate: "2015-03-31"
         +accountingPeriodStatus: null
         +amount: 2.65
         +paymentDetailsJson: null
         +transactionDetailsJson: null
         +paymentMethodId: null
         +totalWithheld: null
         +creditDeductionTimeAdded: "2015-04-05 01:32:22"
         +creditDeductionType: "GOOGLE_CHARGEBACK"
         +creditDeductionUserNote: null
      }
   ]

List Fees
_________

Use this endpoint to obtain a list of Fees for your account given during an optional date range.

.. code-block:: php
	:linenos:

	Bodis::listFees();

You can pass any parameters listed in their documentation as an array. 


.. code-block:: php
   :linenos:

   Bodis::listFees([
      'start_date' => 2015-08-31,
      'end_date' => 2016-11-29
   ]);

Payments returned will be an array of the Fee Resource: Example Response