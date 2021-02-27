<?php
class UnzerDirect_Payment_Model_System_Config_Source_Specificcardtypes
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'american-express', 'label' => Mage::helper('unzerdirect_payment')->__('American Express')),
            array('value' => 'dankort', 'label' => Mage::helper('unzerdirect_payment')->__('Dankort')),
            array('value' => 'diners', 'label' => Mage::helper('unzerdirect_payment')->__('Diners Club')),
            array('value' => 'edankort', 'label' => Mage::helper('unzerdirect_payment')->__('eDankort')),
            array('value' => 'fbg1886', 'label' => Mage::helper('unzerdirect_payment')->__('Forbrugsforeningen af 1886')),
            array('value' => 'jcb', 'label' => Mage::helper('unzerdirect_payment')->__('JCB')),
            array('value' => 'maestro', 'label' => Mage::helper('unzerdirect_payment')->__('Maestro debit card')),
            array('value' => 'mastercard', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard')),
            array('value' => 'mastercard-debet', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard Debet')),
            array('value' => 'mobilepay', 'label' => Mage::helper('unzerdirect_payment')->__('MobilePay Online')),
            array('value' => 'visa', 'label' => Mage::helper('unzerdirect_payment')->__('Visa')),
            array('value' => 'visa-electron', 'label' => Mage::helper('unzerdirect_payment')->__('Visa Electron')),
            array('value' => 'paypal', 'label' => Mage::helper('unzerdirect_payment')->__('PayPal')),
            array('value' => 'sofort', 'label' => Mage::helper('unzerdirect_payment')->__('Sofort')),
            array('value' => 'viabill', 'label' => Mage::helper('unzerdirect_payment')->__('ViaBill')),
            array('value' => 'klarna', 'label' => Mage::helper('unzerdirect_payment')->__('Klarna')),
            array('value' => 'swipp', 'label' => Mage::helper('unzerdirect_payment')->__('Swipp')),
        );
    }
}
