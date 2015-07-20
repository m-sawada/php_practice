<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');
require_once('Controller.php');


class ControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetAccountDetail()
    {
        $object = new GetAccountDetail('premium');

        $this->assertEquals('プレミアム会員', $object->accountDetail()->account());
        $this->assertEquals("お知らせ：【プレミアム会員の継続利用について】\n", $object->accountDetail()->appeal());

    }

    /**
     * @test
     */
    public function testGetPlanDetail()
    {
        $object = new GetPlanDetail('premium','mega');

        $this->assertEquals('メガプラン',$object->planDetail()->planName());
        $this->assertEquals('8000円',$object->planDetail()->price());
        $this->assertEquals('7GB',$object->planDetail()->capacity());
    }


}