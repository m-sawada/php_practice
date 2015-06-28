<?php

public function checkError()
{
    $status = $this->apiParameters['status_status'];
    if ($status === '10' || $status === '50') {
        return true;
    }
    return false;
}