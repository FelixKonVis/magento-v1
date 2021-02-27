<?php
class UnzerDirect_Payment_Block_Payment_Form_Klarna extends Mage_Payment_Block_Form
{
    /**
     * Instructions text
     *
     * @var string
     */
    protected $_instructions;

    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('unzerdirectpayment/payment/form/default.phtml');
    }

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        if (is_null($this->_instructions)) {
            $this->_instructions = $this->getMethod()->getInstructions();
        }

        return $this->_instructions;
    }

    /**
     * Append logo on payment selection form
     *
     * @return string
     */
    public function getMethodLabelAfterHtml()
    {
        return sprintf('<img src="%s" height="20" alt="Klarna"/>', $this->getSkinUrl('images/unzerdirectpayment/klarna.png'));
    }
}
