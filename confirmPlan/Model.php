<?php

require_once('planDetail.php');

class Model
{
    private $accounts = ['premium', 'normal'];

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
            'capacity' => '5GB'
        ],
        'mega' => [
            'course_name_japanese' => 'メガプラン',
            'price' => '8000',
            'capacity' => '7GB'
        ]
    ];

    /**
     * @param string $inputAccount
     * @param string $inputPlanName
     * @return string
     */
    public function getPlanDetail($inputAccount, $inputPlanName)
    {
        $plans = $this->plans;
        $accounts = $this->accounts;

        $planDetail = new planDetail($accounts, $inputAccount, $plans, $inputPlanName);

        return $planDetail->planDetail($accounts, $inputAccount, $plans, $inputPlanName);
    }
}
