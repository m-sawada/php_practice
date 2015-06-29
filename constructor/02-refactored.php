<?php

/**
 * @return bool
 */
public function hasAccessControlParameters()
{
    return array_key_exists('kinouc_riyoseigen_new[1]', $this->apiParameters);
}


$controlRiyoseigenNew521 = (hasAccessControlParameters())?get($this->apiParameters, 'control_riyoseigen_new[1]', ''):'';
    

