<?php
class UnzerDirect_Payment_Model_Method_Directdebit extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_directdebit';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_directdebit';

    protected static $_cartAmountMin = 10;
    protected static $_cartAmountMax = 3500;

    protected $_allowCurrencyCode = array(
        'EUR'
    );

    public function getPaymentMethods()
    {
        return 'unzer-pay-later-direct_debit';
    }

    public function isAvailable($quote = null)
    {
        if($quote) {
            if (!in_array($quote->getBaseCurrencyCode(), $this->_allowCurrencyCode)) {
                return false;
            }

            if($quote->getGrandTotal() < self::$_cartAmountMin
                || $quote->getGrandTotal() > self::$_cartAmountMax) {
                return false;
            }
        }
        return parent::isAvailable($quote);
    }
}