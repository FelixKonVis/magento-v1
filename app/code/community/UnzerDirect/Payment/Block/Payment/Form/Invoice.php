<?php
class UnzerDirect_Payment_Block_Payment_Form_Invoice extends Mage_Payment_Block_Form
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
        $lang = Mage::getStoreConfig('general/locale/code', Mage::app()->getStore()->getId());
        return $this->getImageByLang($lang);
    }

    /**
     * @return string
     */
    public function getImageByLang($lang){
        if($lang){
            $code = strstr($lang, '_', true);
            if($code == 'de'){
                return sprintf('<img src="%s" height="20" alt="Unzer Direct Invoice"/>', $this->getSkinUrl('images/unzerdirectpayment/invoice_de.svg'));
            }
        }

        return sprintf('<img src="%s" height="20" alt="Unzer Direct Invoice"/>', $this->getSkinUrl('images/unzerdirectpayment/invoice_en.svg'));
    }
}
