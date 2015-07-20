<?php

class MembersInformation
{

    public function memberInformation($inputAccount)
    {
        if ($inputAccount === 'normal') {
            return 'お知らせ：【プレミアム会員になりませんか】';
        } elseif ($inputAccount === 'premium') {
            return 'お知らせ：【プレミアム会員の継続利用について】';
        }elseif($inputAccount === 'richPremium'){
            return 'お知らせ：【リッチプレミアム会員の継続利用について';
        }
        else {
            return '不正な入力です。';
        }
    }

}