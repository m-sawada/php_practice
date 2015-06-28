<?php

/**
 * @return bool
 */
public function checkError()
{
    return in_array($this->apiParameters['status_status'], ['10', '50']);
}