<?php
class UnzerDirect_Payment_Model_Method_Klarna extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_klarna';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_klarna';

    public function getPaymentMethods()
    {
        return 'klarna-payments';
    }
}