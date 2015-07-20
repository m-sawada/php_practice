<?php
namespace Plan;

class Large
{
    const PLAN_NAME = 'ラージプラン';
    const NORMAL_PRICE = '7000円';
    const PREMIUM_PRICE = '6000円';
    const RICH_PREMIUM_PRICE = '5000円';
    const CAPACITY = '5GB';

    private $account;

    public function __construct($account)
    {
        $this->account = $account;
    }

    public function planCaution()
    {
        return;
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