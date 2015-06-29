<?php

private function externalContractRefer(Application $app)
{
    $model = resignModel($app);

    $displayService = [];
    if ($model->hasLteData()) {
        array_push($displayService, 'LTE');
    }
    if ($model->has3g()) {
        array_push($displayService, '3G');
    }
    if ($model->hasEmobile()) {
        array_push($displayService, 'Emobile');
    }
    if ($model->hasWiMAX2()) {
        array_push($displayService, 'WiMAX2');
    }
    if ($model->hasWiMAXau()) {
        array_push($displayService, 'WiMAXau');
    }
    if ($model->hasWiMAX()) {
        array_push($displayService, 'WiMAX');
    }
    return $displayService;
}