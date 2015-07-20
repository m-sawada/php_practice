<?php
require_once dirname(__FILE__) . '/Normal.php';
require_once dirname(__FILE__) . '/Premium.php';
require_once dirname(__FILE__) . '/RichPremium.php';

class GetAccountDetail
{
    private $inputAccount;

    public function __construct($inputAccount)
    {
        $this->inputAccount = $inputAccount;
    }

    /**
     * @return bool|Normal|Premium|richPremium
     */
    public function accountDetail()
    {
        if ($this->inputAccount === 'normal') {
            return new Normal;
        }

        if ($this->inputAccount === 'premium') {
            return new Premium;
        }

        if ($this->inputAccount === 'richPremium') {
            return new richPremium;
        }
        return false;
    }
}