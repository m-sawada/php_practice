<?php

require_once dirname(__FILE__) . '/GetAccountDetail.php';

echo 'your account? normal/premium/richPremium :';

$inputAccount = trim(fgets(STDIN));

$getAccountDetail = new GetAccountDetail($inputAccount);

echo $getAccountDetail->accountDetail();


