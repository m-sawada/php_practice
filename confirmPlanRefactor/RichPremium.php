<?php

class RichPremium
{
    const ACCOUNT = 'プレミアム会員';
    const APPEAL = "お知らせ：【リッチプレミアム会員の継続利用について】\n";

        function account() {
            return self::ACCOUNT;
        }

        function appeal(){
            return self::APPEAL;
        }
}