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
     * @return string
     */
    public function accountDetail()
    {
        if ($this->inputAccount === 'normal') {
            $accountDetail = new Normal;
        }

        if ($this->inputAccount === 'premium') {
            $accountDetail = new Premium;
        }

        if ($this->inputAccount === 'richPremium') {
            $accountDetail = new richPremium;
        }

        try {
            if (!isset($accountDetail)) {
                throw new Exception("不正な入力です。\n");
            }

            $account = $accountDetail->account();
            $appeal = $accountDetail->appeal();

            return "あなたは{$account}です。\n{$appeal}\n";

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}