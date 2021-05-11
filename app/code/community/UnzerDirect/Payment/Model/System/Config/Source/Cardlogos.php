<?php
class UnzerDirect_Payment_Model_System_Config_Source_Cardlogos
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'visa',
                'label' => Mage::helper('unzerdirect_payment')->__('VISA')
            ),
            array(
                'value' => 'visaelectron',
                'label' => Mage::helper('unzerdirect_payment')->__('VISA Electron')
            ),
            array(
                'value' => 'mastercard',
                'label' => Mage::helper('unzerdirect_payment')->__('MasterCard')
            ),
            array(
                'value' => 'maestro',
                'label' => Mage::helper('unzerdirect_payment')->__('Maestro')
            ),
            array(
                'value' => 'paypal',
                'label' => Mage::helper('unzerdirect_payment')->__('PayPal')
            ),
            array(
                'value' => 'applepay',
                'label' => Mage::helper('unzerdirect_payment')->__('Apple Pay')
            )
        );
    }

    /**
     * Get label for card
     *
     * @param  string $value
     *
     * @return string
     */
    public function getFrontendLabel($value)
    {
        foreach ($this->toOptionArray() as $option) {
            if ($value = $option['value']) {
                return $option['label'];
            }
        }

        return '';
    }
}
