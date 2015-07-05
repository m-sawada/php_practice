<?php

class PlanDetail
{

    /**
     * @param array $accounts
     * @param string $inputAccount
     * @param array $plans
     * @param string $inputPlanName
     * @return string
     */
    public function planDetail(array $accounts, $inputAccount, array $plans, $inputPlanName)
    {
        if (!$this->isValid($accounts, $inputAccount, $plans, $inputPlanName)) {
            return '不正な入力です。';
        }
        if ($this->isValidMegaPlan($inputAccount, $inputPlanName)){
            return 'メガプランはプレミアム会員のみです';
        }

        $course_name_japanese = $plans[$inputPlanName]['course_name_japanese'];
        $price = $plans[$inputPlanName]['price'];
        $capacity = $plans[$inputPlanName]['capacity'];

        if ($inputAccount === 'premium' && $inputPlanName === 'mega') {
            return "選択したのは $course_name_japanese で月 $price 円、容量は $capacity です。";
        } elseif ($inputAccount === 'premium') {
            $premiumPrice = $price - '1000';
            return "選択したのは $course_name_japanese で月 $premiumPrice 円、容量は $capacity です。";
        } else {
            return "選択したのは $course_name_japanese で月 $price 円、容量は $capacity です。";
        }

    }

    /**
     * @param array $accounts
     * @param string $inputAccount
     * @param array $plans
     * @param string $inputPlanName
     * @return bool
     */
    private function isValid(array $accounts, $inputAccount, array $plans, $inputPlanName)
    {
        $validInputAccount = in_array($inputAccount, $accounts);
        $validInputName = isset($plans[$inputPlanName]);

        return $validInputAccount && $validInputName;
    }

    private function isValidMegaPlan($inputAccount, $inputPlanName)
    {
        return $inputAccount !== 'premium' && $inputPlanName === 'mega';

    }

}
