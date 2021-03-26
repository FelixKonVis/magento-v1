<?php
class UnzerDirect_Payment_Model_Method_Payment extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_payment';

    public function getPaymentMethods()
    {
        if ($this->getConfigData('payment_method') === 'specified') {
            return $this->getConfigData('payment_method_specified');
        }

        return $this->getConfigData('payment_method');
    }

    public function canUseInternal()
    {
        return true;
    }
}