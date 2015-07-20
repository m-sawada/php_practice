<?php
require_once dirname(__FILE__) . '/Account/Normal.php';
require_once dirname(__FILE__) . '/Account/Premium.php';
require_once dirname(__FILE__) . '/Account/RichPremium.php';

class GetAccountDetail
{
    private $inputAccount;

    public function __construct($inputAccount)
    {
        $this->inputAccount = $inputAccount;
    }

    /**
     * @return \Account\Normal|\Account\Premium|\Account\richPremium|bool
     */
    public function accountDetail()
    {
        if ($this->inputAccount === 'normal') {
            return new Account\Normal;
        }

        if ($this->inputAccount === 'premium') {
            return new Account\Premium;
        }

        if ($this->inputAccount === 'richPremium') {
            return new Account\richPremium;
        }
        return false;
    }
}