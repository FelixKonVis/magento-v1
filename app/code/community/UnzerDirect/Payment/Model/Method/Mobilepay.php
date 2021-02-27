<?php
class UnzerDirect_Payment_Model_Method_Mobilepay extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_mobilepay';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_mobilepay';

    public function getPaymentMethods()
    {
        return 'mobilepay';
    }
}