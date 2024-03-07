<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/3/7
 * Time: 16:56
 */

namespace AdvertisingDelivery;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function campaignCreate()
    {
        return new CampaignCreate($this->client);
    }

    public function campaignGet()
    {
        return new CampaignGet($this->client);
    }

    public function campaignUpdate()
    {
        return new CampaignUpdate($this->client);
    }

    public function campaignUpdateStatus()
    {
        return new CampaignUpdateStatus($this->client);
    }
}
