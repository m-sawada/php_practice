<?php

class Normal
{
    const ACCOUNT = 'ノーマル会員';
    const APPEAL = "お知らせ：【プレミアム会員になりませんか】\n";

        function account() {
            return self::ACCOUNT;
        }

        function appeal(){
            return self::APPEAL;
        }
}