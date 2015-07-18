<?php
    require_once(dirname(__FILE__) .'/vendor/autoload.php');
    require_once('Model.php');


class ModelTest extends PHPUnit_Framework_TestCase
{
    public function testGetMembersInformation()
    {
        $object = new Model;
        $this->assertEquals('お知らせ：【プレミアム会員の継続利用について】', $object->getMembersInformation('premium')->memberInformation('premium'));
    }
}