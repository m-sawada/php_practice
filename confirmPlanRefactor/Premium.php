<?php

class Premium
{
    const ACCOUNT = 'プレミアム会員';
    const APPEAL = "お知らせ：【プレミアム会員の継続利用について】\n";

        function account() {
            return self::ACCOUNT;
        }

        function appeal(){
            return self::APPEAL;
        }
}