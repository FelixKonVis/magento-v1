<?php
class UnzerDirect_Payment_Model_System_Config_Source_PaymentMethods
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => Mage::helper('unzerdirect_payment')->__('Alle betalingsmetoder')),
            array('value' => 'creditcard', 'label' => Mage::helper('unzerdirect_payment')->__('Alle kreditkort')),
            array('value' => 'specified', 'label' => Mage::helper('unzerdirect_payment')->__('Som angivet')),
        );
    }
}
