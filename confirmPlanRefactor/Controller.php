<?php

require_once dirname(__FILE__) . '/GetAccountDetail.php';

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


