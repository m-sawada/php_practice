<?php

require_once('planDetail.php');

class Model
{

    private $plans = [
        'small' => [
            'course_name_japanese' => 'スモールプラン',
            'price' => '3000',
            'capacity' => '1GB'
        ],
        'normal' => [
            'course_name_japanese' => 'ノーマルプラン',
            'price' => '5000',
            'capacity' => '3GB'
        ],
        'large' => [
            'course_name_japanese' => 'ラージプラン',
            'price' => '7000',
            'capacity' => '5GB']
    ];

    /**
     * @param string $inputPlanName
     * @return string
     */
    public function getPlanDetail($inputPlanName)
    {
        $plans = $this->plans;

        $planDitail = new planDetail($plans, $inputPlanName);

        return $planDitail->planDetail($plans, $inputPlanName);
    }
}
