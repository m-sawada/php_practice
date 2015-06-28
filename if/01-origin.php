<?php

public
function checkError()
{
    if ($this->apiParameters['BO_CL_CODE'] === '0') {
        return true;
    }
    // その他エラー
    throw new SystemErrorException(CLIENT_ID, LOG_PATH);
}