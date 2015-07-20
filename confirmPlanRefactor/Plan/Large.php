<?php
namespace Plan;

class Small
{
    const PLAN_NAME = 'ラージプラン';
    const NORMAL_PRICE = '7000円';
    const PREMIUM_PRICE = '6000円';
    const RICH_PREMIUM_PRICE = '5000円';
    const CAPACITY = '5GB';

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
    public function normalPrice()
    {
        return self::NORMAL_PRICE;
    }

    /**
     * @return string
     */
    public function premiumPrice()
    {
        return self::PREMIUM_PRICE;
    }

    /**
     * @return string
     */
    public function richPremiumPrice()
    {
        return self::RICH_PREMIUM_PRICE;
    }

    /**
     * @return string
     */
    public function capacity()
    {
        return self::CAPACITY;
    }

}