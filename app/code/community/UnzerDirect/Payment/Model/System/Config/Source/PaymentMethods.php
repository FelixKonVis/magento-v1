<?php
class UnzerDirect_Payment_Model_System_Config_Source_PaymentMethods
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => Mage::helper('unzerdirect_payment')->__('All payment methods')),
            array('value' => 'creditcard', 'label' => Mage::helper('unzerdirect_payment')->__('All credit cards')),
            array('value' => 'specified', 'label' => Mage::helper('unzerdirect_payment')->__('As defined')),
        );
    }
}
