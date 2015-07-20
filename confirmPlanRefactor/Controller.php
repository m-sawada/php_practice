<?php

require_once dirname(__FILE__) . '/GetAccountDetail.php';
require_once dirname(__FILE__) . '/GetPlanDetail.php';


echo 'your account? normal/premium/richPremium :';

$inputAccount = trim(fgets(STDIN));

$getAccountDetail = new GetAccountDetail($inputAccount);
$accountDetail = $getAccountDetail->accountDetail();

try {
    if (!$accountDetail) {
        throw new Exception("不正な入力です。\n");
    }

    $account = $accountDetail->account();
    $appeal = $accountDetail->appeal();

    echo "あなたは{$account}です。\n";
    echo "{$appeal}\n";

} catch (Exception $e) {
    echo $e->getMessage();
}

echo 'current plan? small/normal/large(/mega)(/giga):';
$currentPlan = trim(fgets(STDIN));

$getPlanDetail = new GetPlanDetail($inputAccount, $currentPlan);
$planDetail = $getPlanDetail->planDetail();
$currentPlanCaution = $planDetail->planCaution();

try {
    if (!$planDetail) {
        throw new Exception("不正な入力です。\n");
    }
    if ($currentPlanCaution) {
        throw new Exception($currentPlanCaution);
    }
    $planName = $planDetail->planName();
    $capacity = $planDetail->capacity();
    $price = $planDetail->price();

    echo "選択したのは{$planName}で月{$price}、容量は{$capacity}です。\n";

} catch (Exception $e) {
    echo $e->getMessage();
}