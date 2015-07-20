<?php

class ChangePlanDetail
{
    /**
     * @param array $accounts
     * @param string $inputAccount
     * @param array $plans
     * @param string $inputPlanName
     * @param string $inputNextPlan
     * @return string
     */
    public function changePlanDetail(array $accounts, $inputAccount, array $plans, $inputPlanName, $inputNextPlan)
    {
        if (!$this->isValid($accounts, $inputAccount, $plans, $inputPlanName)) {
            return '不正な入力です。';
        }
        if ($this->isValidMegaPlan($inputAccount, $inputPlanName, $inputNextPlan)){
            return 'メガプランはプレミアム会員のみです';
        }
        if ($this->isValidSmallPlan($inputNextPlan)) {
            return " $inputPlanName からスモールプランへの変更は不可能です。";
        }
        if ($this->isValidSamePlan($inputPlanName, $inputNextPlan)) {
            return " $inputPlanName から $inputNextPlan への変更は不可能です。";
        }
        if ($this->isValidMegaplanToNormalPlan($inputPlanName, $inputNextPlan)){
            return "メガプランからノーマルプランへの変更は不可能です。";
        }

        $current_course_name_japanese = $plans[$inputPlanName]['course_name_japanese'];
        $next_course_name_japanese = $plans[$inputNextPlan]['course_name_japanese'];
        $price = $plans[$inputNextPlan]['price'];
        $capacity = $plans[$inputNextPlan]['capacity'];

        if ($inputAccount === 'premium' && $inputNextPlan === 'mega') {
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $price 円、容量は $capacity です。";
        } elseif ($inputAccount === 'premium') {
            $premiumPrice = $price - '1000';
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $premiumPrice 円、容量は $capacity です。";
        } else {
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $price 円、容量は $capacity です。";
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

    private function isValidMegaPlan($inputAccount, $inputPlanName, $inputNextPlan)
    {
        $currentInput = $inputAccount !== 'premium' && $inputPlanName === 'mega';
        $nextInput = $inputAccount !== 'premium' && $inputNextPlan === 'mega';
        return $currentInput || $nextInput;

    }

    private function isValidSmallPlan($inputNextPlan)
    {
        return $inputNextPlan === 'small';
    }

    private function isValidSamePlan($inputPlanName, $inputNextPlan)
    {
        return $inputPlanName === $inputNextPlan;
    }

    private function isValidMegaplanToNormalPlan($inputPlanName, $inputNextPlan)
    {
        return $inputPlanName === 'mega' && $inputNextPlan === 'normal';
    }
}