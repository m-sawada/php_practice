<?php

class ChangePlanDetail
{
    /**
     * @param array  $accounts
     * @param string $inputAccount
     * @param array  $plans
     * @param string $inputPlanName
     * @param string $inputNextPlan
     * @return string
     */
    public function changePlanDetail(array $accounts, $inputAccount, array $plans, $inputPlanName, $inputNextPlan)
    {
        if (!$this->isValid($accounts, $inputAccount, $plans, $inputPlanName)) {
            return '不正な入力です。';
        }
        if ($this->isValidMegaPlan($inputAccount, $inputNextPlan)) {
            return 'メガプランはプレミアム会員のみです';
        }
        if ($this->isValidSmallPlan($inputNextPlan)) {
            return " $inputPlanName からスモールプランへの変更は不可能です。";
        }
        if ($this->isValidGigaPlan($inputAccount, $inputPlanName, $inputNextPlan)) {
            return "$inputPlanName からギガプランへの変更は不可能です。";
        }
        if ($this->isValidSamePlan($inputPlanName, $inputNextPlan)) {
            return " $inputPlanName から $inputNextPlan への変更は不可能です。";
        }
        if ($this->isValidMegaplanToNormalPlan($inputPlanName, $inputNextPlan)) {
            return "メガプランからノーマルプランへの変更は不可能です。";
        }

        $current_course_name_japanese = $plans[$inputPlanName]['course_name_japanese'];
        $next_course_name_japanese = $plans[$inputNextPlan]['course_name_japanese'];
        $price = $plans[$inputNextPlan]['price'];
        $capacity = $plans[$inputNextPlan]['capacity'];

        if ($inputAccount === 'premium' && $inputNextPlan === 'mega' && $inputAccount === 'richPremium') {
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $price 円、容量は $capacity です。";
        } elseif ($inputAccount === 'premium') {
            $premiumPrice = $price - '1000';
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $premiumPrice 円、容量は $capacity です。";
        } elseif ($inputAccount === 'richPremium') {
            $premiumPrice = $price - '2000';
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $premiumPrice 円、容量は $capacity です。";
        } else {
            return " $current_course_name_japanese から $next_course_name_japanese に変更しました。選択したのは $next_course_name_japanese で月 $price 円、容量は $capacity です。";
        }

    }


    /**
     * @param array  $accounts
     * @param string $inputAccount
     * @param array  $plans
     * @param string $inputPlanName
     * @return bool
     */
    private function isValid(array $accounts, $inputAccount, array $plans, $inputPlanName)
    {
        $validInputAccount = in_array($inputAccount, $accounts);
        $validInputName = isset($plans[$inputPlanName]);

        return $validInputAccount && $validInputName;
    }

    /**
     * @param string $inputAccount
     * @param string $inputNextPlan
     * @return bool
     */
    private function isValidMegaPlan($inputAccount, $inputNextPlan)
    {
        $isValidMegaPlanAccounts = ['premium', 'richPremium'];

        return ($inputNextPlan === 'mega' && in_array($inputAccount, $isValidMegaPlanAccounts) === false) ? true : false;

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

    private function isValidGigaPlan($inputAccount, $inputPlanName, $inputNextPlan)
    {
        if ($inputNextPlan !== 'giga') {
            return false;
        }

        if ($inputAccount === 'richPremium') {
            return $inputPlanName !== 'mega';
        }

        return false;
    }
}