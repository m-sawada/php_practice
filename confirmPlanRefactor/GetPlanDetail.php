<?php

require_once dirname(__FILE__) . '/Plan/Small.php';
require_once dirname(__FILE__) . '/Plan/Normal.php';
require_once dirname(__FILE__) . '/Plan/Large.php';
require_once dirname(__FILE__) . '/Plan/Mega.php';
require_once dirname(__FILE__) . '/Plan/Giga.php';

class GetPlanDetail
{
    private $inputAccount;
    private $currentPlan;

    public function __construct($inputAccount, $currentPlan)
    {
        $this->inputAccount = $inputAccount;
        $this->currentPlan = $currentPlan;
    }

    public function planDetail()
    {

        if ($this->currentPlan === 'small') {
            return new Plan\Small($this->inputAccount);
        }

        if ($this->currentPlan === 'normal') {
            return new Plan\Normal($this->inputAccount);
        }

        if ($this->currentPlan === 'large') {
            return new Plan\Large($this->inputAccount);
        }

        if ($this->currentPlan === 'mega') {
            return new Plan\Mega($this->inputAccount);
        }

        if ($this->currentPlan === 'giga') {
            return new Plan\Giga($this->inputAccount);
        }

        return false;
    }

}