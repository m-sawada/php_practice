<?php

require_once('Model.php');
require_once('MembersInformation.php');

echo 'your account? normal/premium :';

$inputAccount = trim(fgets(STDIN));

echo 'plan? small/normal/large(/mega) :';

$inputPlan = trim(fgets(STDIN));

$model = new Model;

$getMembersInformation = $model->getMembersInformation($inputAccount);

echo $model->getPlanDetail($inputAccount, $inputPlan);
echo $getMembersInformation->memberInformation($inputAccount);