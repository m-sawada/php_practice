<?php

require_once('Model.php');

echo 'your account? normal/premium :';

$inputAccount = trim(fgets(STDIN));

echo 'plan? small/normal/large(/mega) :';

$inputPlan = trim(fgets(STDIN));

$model = new Model;

echo $model->getPlanDetail($inputAccount, $inputPlan);