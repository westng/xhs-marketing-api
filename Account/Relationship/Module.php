<?php

namespace Account\Relationship;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function accountAdvertiserInfo()
    {
        return new AccountAdvertiserInfo($this->client);
    }  
    public function accountAdvertiserPublicInfo()
    {
        return new AccountAdvertiserPublicInfo($this->client);
    }  
    public function accountAdvertiserTypeGet()
    {
        return new AccountAdvertiserTypeGet($this->client);
    }  
    public function accountAgentInfo()
    {
        return new AccountAgentInfo($this->client);
    }  
    public function accountShopGet()
    {
        return new AccountShopGet($this->client);
    }  
    public function accountUserInfo()
    {
        return new AccountUserInfo($this->client);
    }  

}