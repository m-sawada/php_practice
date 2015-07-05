<?php

class planDetail
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
        if (!$this->isValid($plans, $inputPlanName, $accounts, $inputAccount)) {
            return '不正な入力です。';
        }

        $course_name_japanese = $plans[$inputPlanName]['course_name_japanese'];
        $price = $plans[$inputPlanName]['price'];
        $capacity = $plans[$inputPlanName]['capacity'];

        if ($inputAccount === 'premium') {
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

}
