<?php
class UnzerDirect_Payment_Model_Sales_Order_Grid_Fraudprobability extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        $url = Mage::helper("adminhtml")->getUrl("adminhtml/order/", array("id" => $row->getId()));
        $image = Mage::helper('unzerdirect_payment')->getImage($row->getId());

        $content = $this
            ->getLayout()
            ->createBlock('core/template')
            ->setTemplate('unzerdirectpayment/grid/fraudprobability.phtml')
            ->setInfoUrl($url)
            ->setImage($image)
            ->toHtml();

        return $content;
    }
}