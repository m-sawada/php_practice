<?php

class MembersInformation
{

    public function memberInformation($inputAccount)
    {
        if ($inputAccount === 'normal') {
            return 'お知らせ：【プレミアム会員になりませんか】';
        } else {
            return 'お知らせ：【プレミアム会員の継続利用について】';
        }
    }

}