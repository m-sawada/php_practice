<?php
    require_once(dirname(__FILE__) .'/vendor/autoload.php');
    require_once('Model.php');


class ModelTest extends PHPUnit_Framework_TestCase
{
    public function testGetMembersInformation()
    {
        $object = new Model;

        /** プレミアム会員へのお知らせ表示（正常） */
        $this->assertEquals('お知らせ：【プレミアム会員の継続利用について】', $object->getMembersInformation('premium')->memberInformation('premium'));

        /** ノーマル会員へのお知らせ表示（正常）*/
        $this->assertEquals('お知らせ：【プレミアム会員になりませんか】', $object->getMembersInformation('normal')->memberInformation('normal'));

        /** 入力不正（異常） */
        $this->assertEquals('不正な入力です。', $object->getMembersInformation('test')->memberInformation('test'));

    }
}