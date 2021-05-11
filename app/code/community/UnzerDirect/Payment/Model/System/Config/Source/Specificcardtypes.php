<?php
class UnzerDirect_Payment_Model_System_Config_Source_Specificcardtypes
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'american-express', 'label' => Mage::helper('unzerdirect_payment')->__('American Express')),
            array('value' => 'edankort', 'label' => Mage::helper('unzerdirect_payment')->__('eDankort')),
            array('value' => 'maestro', 'label' => Mage::helper('unzerdirect_payment')->__('Maestro debit card')),
            array('value' => 'mastercard', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard')),
            array('value' => 'mastercard-debet', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard Debet')),
            array('value' => 'visa', 'label' => Mage::helper('unzerdirect_payment')->__('Visa')),
            array('value' => 'visa-electron', 'label' => Mage::helper('unzerdirect_payment')->__('Visa Electron')),
            array('value' => 'paypal', 'label' => Mage::helper('unzerdirect_payment')->__('PayPal')),
            array('value' => 'klarna', 'label' => Mage::helper('unzerdirect_payment')->__('Klarna')),
            array('value' => 'swipp', 'label' => Mage::helper('unzerdirect_payment')->__('Swipp')),
        );
    }
}
