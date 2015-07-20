<?php
namespace Account;

class RichPremium
{
    const ACCOUNT = 'プレミアム会員';
    const APPEAL = "お知らせ：【リッチプレミアム会員の継続利用について】\n";

    /**
     * @return string
     */
    function account()
    {
        return self::ACCOUNT;
    }

    /**
     * @return string
     */
    function appeal()
    {
        return self::APPEAL;
    }
}