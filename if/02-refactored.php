<?php

/**
 * @throws SystemErrorException
 */
public function checkError()
{
    if (!in_array($this->apiParameters['BO_CL_CODE'], [0,1])) {
        // その他エラー
        throw new SystemErrorException(CLIENT_ID, LOG_PATH);
    }
}