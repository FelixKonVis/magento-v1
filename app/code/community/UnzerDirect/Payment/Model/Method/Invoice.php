<?php
class UnzerDirect_Payment_Model_Method_Invoice extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_invoice';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_invoice';

    protected static $_cartAmountMin = 10;
    protected static $_cartAmountMax = 3500;

    protected $_allowCurrencyCode = array(
        'EUR', 'CHF'
    );

    public function getPaymentMethods()
    {
        return 'unzer-pay-later-invoice';
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