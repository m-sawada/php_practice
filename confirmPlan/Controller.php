<?php

require_once('Model.php');

echo 'plan? small/normal/large :';

$inputData = trim(fgets(STDIN));

$model = new Model;

echo $model->getPlanDetail($inputData);