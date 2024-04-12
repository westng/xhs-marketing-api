<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/3/7
 * Time: 17:23
 */

namespace AdvertisingPlan;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function AdCreate()
    {
        return new AdCreate($this->client);
    }

    public function adGet()
    {
        return new AdGet($this->client);
    }

    public function adDetail()
    {
        return new AdDetail($this->client);
    }

    public function adUpdate()
    {
        return new AdUpdate($this->client);
    }

    public function adUpdateBid()
    {
        return new AdUpdateBid($this->client);
    }

    public function adUpdateBudget()
    {
        return new AdUpdateBudget($this->client);
    }

    public function adUpdateStatus()
    {
        return new AdUpdateStatus($this->client);
    }

    public function adCompensateStatusGet()
    {
        return new AdCompensateStatusGet($this->client);
    }

    public function adEstimateEffect()
    {
        return new AdEstimateEffect($this->client);
    }

    public function adLearingStatusGet()
    {
        return new AdLearingStatusGet($this->client);
    }

    public function adLqAdGet()
    {
        return new AdLqAdGet($this->client);
    }

    public function adRejectReason()
    {
        return new AdRejectReason($this->client);
    }

    public function adSuggestBudget()
    {
        return new AdSuggestBudget($this->client);
    }

    public function adSuggestBid()
    {
        return new AdSuggestBid($this->client);
    }

    public function adSuggestRoiGoal()
    {
        return new AdSuggestRoiGoal($this->client);
    }
}
