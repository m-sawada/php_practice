<?php

$displayStatus = ['100', '200', '210', '250', '300', '400', '700', '710'];

/**
 * @param array $contractStatus
 * @return bool
 */
private function checkStatus(array $contractStatus)
{
    $has = array_intersect($contractStatus, $this->displayStatus);
    return !empty($has);
}