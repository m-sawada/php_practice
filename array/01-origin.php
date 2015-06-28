<?php

private function checkStatus($contractStatus)
{
    $displayStatus = ['100', '200', '210', '250', '300', '400', '700', '710'];
    foreach ($contractStatus as $status) {
        if (in_array($status, $displayStatus) === true) {
            return true;
        }
    }
    return false;
}