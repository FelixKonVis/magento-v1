<?php
class UnzerDirect_Payment_Model_Method_Viabill extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_viabill';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_viabill';

    public function getPaymentMethods()
    {
        return 'viabill';
    }
}