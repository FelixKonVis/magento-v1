<?php
class UnzerDirect_Payment_Model_Method_Googlepay extends UnzerDirect_Payment_Model_Method_Abstract
{
    protected $_code = 'unzerdirect_googlepay';
    protected $_formBlockType = 'unzerdirect_payment/payment_form_googlepay';

    public function getPaymentMethods()
    {
        return 'google-pay';
    }

    public function canUseCheckout()
    {
        return $this->isChormeBrowser();
    }

    public function isChormeBrowser(){
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $ischrome = false;
        if (preg_match('/Chrome/i',$u_agent)){
            $ischrome = true;
        }

        return $ischrome;
    }
}