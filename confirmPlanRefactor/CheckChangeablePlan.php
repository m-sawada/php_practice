<?php

class checkChangeablePlan
{
    private $inputAccount;
    private $currentPlan;
    private $nextPlan;


    public function __construct($inputAccount, $currentPlan, $nextPlan)
    {
        $this->inputAccount = $inputAccount;
        $this->currentPlan = $currentPlan;
        $this->nextPlan = $nextPlan;
    }

    /**
     * スモールプランは受付停止の為、プラン変更不可
     * @return bool
     */
    public function notChangeableSmallPlan()
    {
        return $this->nextPlan === 'small';
    }

    /**
     * 同じプランへのプラン変更不可
     * @return bool
     */
    public function notChangeableSamePlan()
    {
        return $this->currentPlan === $this->nextPlan;
    }

    /**
     * メガプランからノーマルプランへのプラン変更不可
     * @return bool
     */
    public function notChangeableMegaPlanToNormalPlan()
    {
        return $this->currentPlan === 'mega' && $this->nextPlan === 'normal';
    }

    /**
     * リッチプレミアム会員かつメガプランの人がギガプランにプラン変更できる
     * @return bool
     */
    public function notChangeableGigaPlan()
    {
        if ($this->nextPlan !== 'giga') {
            return false;
        }

        if ($this->inputAccount === 'richPremium') {
            return $this->currentPlan !== 'mega';
        }

        return false;
    }
}