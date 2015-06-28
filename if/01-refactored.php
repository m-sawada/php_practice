<?php

/**
 * @throws SystemErrorException
 */
public function checkError()
{
    if ($this->apiParameters['BO_CL_CODE'] !== '0') {
        // その他エラー
        throw new SystemErrorException(CLIENT_ID, LOG_PATH);
    }
}