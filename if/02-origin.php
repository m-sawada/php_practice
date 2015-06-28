<?php

public function checkError()
{
    $boClCode = ['0', '1'];
    if (in_array($this->apiParameters['BO_CL_CODE'], $boClCode) === false) {
        // その他エラー
        throw new SystemErrorException(CLIENT_ID, LOG_PATH);
    }
    return;
}