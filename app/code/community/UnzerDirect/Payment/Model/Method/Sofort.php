<?php
class UnzerDirect_Payment_Model_Method_Sofort extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_sofort';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_sofort';

    protected $_allowCurrencyCode = array(
        'EUR', 'GBP', 'PLN', 'CHF'
    );

    public function getPaymentMethods()
    {
        return 'sofort';
    }

    public function isAvailable($quote = null)
    {
        if($quote) {
            if (!in_array($quote->getBaseCurrencyCode(), $this->_allowCurrencyCode)) {
                return false;
            }
        }
        return parent::isAvailable($quote);
    }
}