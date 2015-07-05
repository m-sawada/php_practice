<?php

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

        return $this->planDetail($plans, $inputPlanName);
    }

    /**
     * @param array $plans
     * @param $inputPlanName
     * @return string
     */
    private function planDetail(array $plans, $inputPlanName)
    {
        if(!$this->isValid($plans, $inputPlanName)){
            return '不正な入力です。';
        }

        $course_name_japanese = $plans[$inputPlanName]['course_name_japanese'];
        $price = $plans[$inputPlanName]['price'];
        $capacity = $plans[$inputPlanName]['capacity'];

        return "選択したのは $course_name_japanese で月 $price 円、容量は $capacity です。";
    }

    /**
     * @param array $plans
     * @param string $inputData
     * @return bool
     */
    private function isValid(array $plans, $inputData)
    {
        return isset($plans[$inputData]);
    }
}
