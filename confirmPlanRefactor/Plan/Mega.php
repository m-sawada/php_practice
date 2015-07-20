<?php
namespace Plan;

class Mega
{
    const PLAN_NAME = 'メガプラン';
    const NORMAL_PRICE = '9000円';
    const PREMIUM_PRICE = '8000円';
    const RICH_PREMIUM_PRICE = '7000円';
    const CAPACITY = '7GB';
    const PLAN_CAUTION = "メガプランはプレミアム会員のみです。\n";

    private $account;

    public function __construct($account)
    {
        $this->account = $account;
    }

    public function planCaution()
    {
        $isValidAccounts = ['premium', 'richPremium'];
        return (!in_array($this->account, $isValidAccounts)) ? self::PLAN_CAUTION : false;
    }

    /**
     * @return string
     */
    public function planName()
    {
        return self::PLAN_NAME;
    }

    /**
     * @return string
     */
    public function price()
    {
        if ($this->account === 'richPremium') {
            return self::RICH_PREMIUM_PRICE;
        } elseif ($this->account === 'premium') {
            return self::PREMIUM_PRICE;
        } else {
            return self::NORMAL_PRICE;
        }
    }

    /**
     * @return string
     */
    public function capacity()
    {
        return self::CAPACITY;
    }
}