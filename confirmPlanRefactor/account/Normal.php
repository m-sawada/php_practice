<?php
namespace Account;

class Normal
{
    const ACCOUNT = 'ノーマル会員';
    const APPEAL = "お知らせ：【プレミアム会員になりませんか】\n";

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