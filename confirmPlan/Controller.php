<?php

require_once('Model.php');
require_once('MembersInformation.php');

echo 'your account? normal/premium :';

$inputAccount = trim(fgets(STDIN));

echo 'current plan? small/normal/large(/mega) :';

$inputPlan = trim(fgets(STDIN));

echo 'next plan? small/normal/large(/mega) :';

$inputChangePlan = trim(fgets(STDIN));

$model = new Model;

$getMembersInformation = $model->getMembersInformation($inputAccount);

// $model->getPlanDetail($inputAccount, $inputPlan);
echo $getMembersInformation->memberInformation($inputAccount);
echo $model->getChangePlanDetail($inputAccount, $inputPlan, $inputChangePlan);
