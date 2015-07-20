<?php

require_once('Model.php');
require_once('MembersInformation.php');

echo 'your account? normal/premium/richPremium :';

$inputAccount = trim(fgets(STDIN));

echo 'current plan? small/normal/large(/mega):';

$inputPlan = trim(fgets(STDIN));

echo 'next plan? small/normal/large(/mega):';

$inputChangePlan = trim(fgets(STDIN));

$model = new Model;

$getMembersInformation = $model->getMembersInformation($inputAccount);

echo $getMembersInformation->memberInformation($inputAccount);
echo $model->getChangePlanDetail($inputAccount, $inputPlan, $inputChangePlan);
