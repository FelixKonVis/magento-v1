<?php
class UnzerDirect_Payment_Model_Method_Paypal extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_paypal';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_paypal';

    public function getPaymentMethods()
    {
        return 'paypal';
    }
}