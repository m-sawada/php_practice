<?php

class Premium
{
    const ACCOUNT = 'プレミアム会員';
    const APPEAL = "お知らせ：【プレミアム会員の継続利用について】\n";

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