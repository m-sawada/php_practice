<?php
namespace Plan;

class Normal
{
    const PLAN_NAME = 'ノーマルプラン';
    const NORMAL_PRICE = '5000円';
    const PREMIUM_PRICE = '4000円';
    const RICH_PREMIUM_PRICE = '3000円';
    const CAPACITY = '3GB';

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