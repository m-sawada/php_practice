<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once('Controller.php');


class ControllerTest extends PHPUnit_Framework_TestCase
{
    public function testGetAccountDetail()
    {
        $getAccountDetail = new GetAccountDetail('premium');

        /** プレミアム会員へのお知らせ表示（正常） */
        $this->assertEquals('お知らせ：【プレミアム会員の継続利用について】',$getAccountDetail->accountDetail());

        /** 入力不正（異常） */
        $this->assertEquals('不正な入力です。', $getAccountDetail->accountDetail());
    }


}