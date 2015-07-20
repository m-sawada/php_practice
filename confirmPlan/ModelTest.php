<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');
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

    public function testGetChangePlanDetail()
    {
        $object = new Model;

        /** ノーマル会員が、スモールプラン→ラージプランに変更した場合の表示(正常) */
        $this->assertEquals(' スモールプラン から ラージプラン に変更しました。選択したのは ラージプラン で月 7000 円、容量は 5GB です。', $object->getChangePlanDetail('normal', 'small', 'large'));

        /** プレミアム会員が、スモールプラン→ラージプランに変更した場合の表示(正常) */
        $this->assertEquals(' スモールプラン から ラージプラン に変更しました。選択したのは ラージプラン で月 6000 円、容量は 5GB です。', $object->getChangePlanDetail('premium', 'small', 'large'));

        /** ノーマル会員が、スモールプラン→メガプランに変更した場合の表示(正常) */
        $this->assertEquals('メガプランはプレミアム会員のみです', $object->getChangePlanDetail('normal', 'small', 'mega'));

        /** メガプラン→ギガプランへ変更した場合の表示（正常） */
        $this->assertEquals('メガプランからギガプランに変更しました。選択したのはギガプランで月9000円、容量は9GBです。', $object->getChangePlanDetail('richPremium', 'mega', 'giga'));

        /** スモールプランは受付停止中なのでプラン変更不可（正常） */
        $this->assertEquals(' large からスモールプランへの変更は不可能です。', $object->getChangePlanDetail('premium', 'large', 'small'));

        /** 同じプランへのプラン変更不可（正常） */
        $this->assertEquals(' large から large への変更は不可能です。', $object->getChangePlanDetail('premium', 'large', 'large'));

        /** メガプラン→ノーマルプランへの変更不可（正常）*/
        $this->assertEquals('メガプランからノーマルプランへの変更は不可能です。', $object->getChangePlanDetail('premium', 'mega', 'normal'));

        /** メガプランからしかギガプランには変更できない（正常） */
        $this->assertEquals(' largeからギガプランへの変更は不可能です。', $object->getChangePlanDetail('richPremium', 'large', 'giga'));

        /** ギガプランからはスモールプラン以外へ変更できる（正常） */
        $this->assertEquals(' ギガプランからノーマルプランへの変更は不可能です。', $object->getChangePlanDetail('richPremium', 'giga', 'normal'));

        /** 入力不正（異常） */
        $this->assertEquals('不正な入力です。', $object->getChangePlanDetail('test', 'test', 'test'));
    }
}