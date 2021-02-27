<?php
class UnzerDirect_Payment_Model_System_Config_Source_Transactionfees
{
    public function toOptionArray()
    {
        return array(
            // DANSKE
            array('value' => 'american-express-dk', 'label' => Mage::helper('unzerdirect_payment')->__('American Express (Dansk)')),
            array('value' => 'dankort', 'label' => Mage::helper('unzerdirect_payment')->__('Dankort')),
            array('value' => 'diners-dk', 'label' => Mage::helper('unzerdirect_payment')->__('Diners (Dansk)')),
            array('value' => 'edankort', 'label' => Mage::helper('unzerdirect_payment')->__('edankort')),
            array('value' => 'maestro-dk', 'label' => Mage::helper('unzerdirect_payment')->__('Maestro (Dansk)')),
            array('value' => 'mastercard-dk', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard (Dansk)')),
            array('value' => 'mastercard-debet-dk', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard debit (Dansk)')),
            array('value' => 'mobilepay', 'label' => Mage::helper('unzerdirect_payment')->__('Mobilepay')),
            array('value' => 'visa-dk', 'label' => Mage::helper('unzerdirect_payment')->__('Visa (Dansk)')),
            array('value' => 'visa-electron-dk', 'label' => Mage::helper('unzerdirect_payment')->__('Visa Electron (Dansk)')),
            array('value' => 'fbg1886', 'label' => Mage::helper('unzerdirect_payment')->__('Forbrugsforeningen')),

            // UDENLANDSKE
            array('value' => 'american-express', 'label' => Mage::helper('unzerdirect_payment')->__('American Express')),
            array('value' => 'diners', 'label' => Mage::helper('unzerdirect_payment')->__('Diners')),
            array('value' => 'jcb', 'label' => Mage::helper('unzerdirect_payment')->__('JCB')),
            array('value' => 'maestro', 'label' => Mage::helper('unzerdirect_payment')->__('Maestro')),
            array('value' => 'mastercard', 'label' => Mage::helper('unzerdirect_payment')->__('Mastercard')),
            array('value' => 'visa', 'label' => Mage::helper('unzerdirect_payment')->__('Visa')),
            array('value' => 'visa-electron', 'label' => Mage::helper('unzerdirect_payment')->__('Visa Electron'))
        );
    }
}
