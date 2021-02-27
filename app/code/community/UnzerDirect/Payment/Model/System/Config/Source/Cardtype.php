<?php
class UnzerDirect_Payment_Model_System_Config_Source_Cardtype
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '',
                'label' => Mage::helper('unzerdirect_payment')->__('Alle betalingsmetoder')
            ),
            array(
                'value' => 'creditcard',
                'label' => Mage::helper('unzerdirect_payment')->__('Alle kreditkort')
            ),
            array(
                'value' => 'specific-cards',
                'label' => Mage::helper('unzerdirect_payment')->__('Vælg specifikke betalingsmetoder')
            ),
        );
    }
}
