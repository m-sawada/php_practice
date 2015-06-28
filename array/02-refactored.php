<?php


public function has3gContract()
{
    if ($this->apiParameters['BO_CL_CODE'] !== '1') {
        return false;
    }
    return has3GStatus()&&has3GDate();
}

private function has3GStatus()
{
    return in_array($this->apiParameters['c_item_free4[1]'], ['50', '90']);
}

private function has3GDate()
{
    $nowTime = new \DateTime();
    $now = $nowTime->format('YmdHis');

    return $now <= $this->apiParameters['c_index_free_date4[1]'];
}