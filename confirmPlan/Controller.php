<?php

require_once('Model.php');

echo 'your account? normal/premium :';

$inputAcount = trim(fgets(STDIN));

echo 'plan? small/normal/large :';

$inputPlan = trim(fgets(STDIN));

$model = new Model;

echo $model->getPlanDetail($inputAcount, $inputPlan);