<?php
class UnzerDirect_Payment_Model_Method_Invoice extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_invoice';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_invoice';

    public function getPaymentMethods()
    {
        return 'unzer-pay-later-invoice';
    }
}