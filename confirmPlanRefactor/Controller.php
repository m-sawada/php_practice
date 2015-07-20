<?php

require_once dirname(__FILE__) . '/GetAccountDetail.php';
require_once dirname(__FILE__) . '/GetPlanDetail.php';
require_once dirname(__FILE__) . '/CheckChangeablePlan.php';


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
    exit;
}

echo 'current plan? small/normal/large(/mega)(/giga):';
$currentPlan = trim(fgets(STDIN));

$getCurrentPlanDetail = new GetPlanDetail($inputAccount, $currentPlan);
$currentPlanDetail = $getCurrentPlanDetail->planDetail();

try {
    $currentPlanDetail = $getCurrentPlanDetail->planDetail();
    if (!$currentPlanDetail) {
        throw new Exception("不正な入力です。\n");
    }

    $currentPlanCaution = $currentPlanDetail->planCaution();

    if ($currentPlanCaution) {
        throw new Exception($currentPlanCaution);
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

$currentPlanName = $currentPlanDetail->planName();
$currentPlanCapacity = $currentPlanDetail->capacity();
$currentPlanPrice = $currentPlanDetail->price();

echo 'next plan? small/normal/large(/mega)(/giga):';
$nextPlan = trim(fgets(STDIN));

$checkChangeablePlan = new CheckChangeablePlan($inputAccount, $currentPlan, $nextPlan);

$getNextPlanDetail = new GetPlanDetail($inputAccount, $nextPlan);


try {
    $nextPlanDetail = $getNextPlanDetail->planDetail();
    if (!$nextPlanDetail) {
        throw new Exception("不正な入力です。\n");
    }
    $nextPlanCaution = $nextPlanDetail->planCaution();
    if ($nextPlanCaution) {
        throw new Exception($nextPlanCaution);
    }
    $nextPlanName = $nextPlanDetail->planName();
    $nextPlanCapacity = $nextPlanDetail->capacity();
    $nextPlanPrice = $nextPlanDetail->price();

    if ($checkChangeablePlan->notChangeableSmallPlan()) {
        throw new Exception("スモールプランへは変更不可です。\n");
    }
    if ($checkChangeablePlan->notChangeableSamePlan()) {
        throw new Exception("{$currentPlanName}から{$nextPlanName}へは変更不可です。\n");
    }
    if ($checkChangeablePlan->notChangeableMegaPlanToNormalPlan()) {
        throw new Exception("メガプランからノーマルプランへは変更不可です。\n");
    }
    if ($checkChangeablePlan->notChangeableGigaPlan()) {
        throw new Exception("{$currentPlanName}からギガプランへは変更不可です。");
    }
    echo "選択したのは{$nextPlanName}で月{$nextPlanPrice}、容量は{$nextPlanCapacity}です。\n";

} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}