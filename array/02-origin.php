<?php

//解約可能かどうか判定
public function has3gContract()
{
    if ($this->apiParameters['BO_CL_CODE'] === '1') {
        return false;
    }

    $status = $this->apiParameters['c_item_free4[1]'];
    $nowTime = new \DateTime();
    $now = $nowTime->format('YmdHis');
    if ($now <= $this->apiParameters['c_index_free_date4[1]']) {
        if ($status === '50' || $status === '90') {
            return true;
        }
    }
    return false;
}