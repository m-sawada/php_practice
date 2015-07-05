<?php

class planDetail
{
    public function planDetail($plans, $inputPlanName)
    {
        if(!$this->isValid($plans, $inputPlanName)){
            return '不正な入力です。';
        }

        $course_name_japanese = $plans[$inputPlanName]['course_name_japanese'];
        $price = $plans[$inputPlanName]['price'];
        $capacity = $plans[$inputPlanName]['capacity'];

        return "選択したのは $course_name_japanese で月 $price 円、容量は $capacity です。";
    }

    private function isValid($plans, $inputData)
    {
        return isset($plans[$inputData]);
    }

}