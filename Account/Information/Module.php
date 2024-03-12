<?php

namespace Account\Information;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function accountAdvertiserGet()
    {
        return new AccountAdvertiserGet($this->client);
    } 
    public function accountAdvertiserSelect()
    {
        return new AccountAdvertiserSelect($this->client);
    } 
    public function accountAuthorizedGet()
    {
        return new AccountAuthorizedGet($this->client);
    } 
    public function accountShopAdvertiserList()
    {
        return new AccountShopAdvertiserList($this->client);
    } 
    public function accountToolAawemeAuth()
    {
        return new AccountToolAawemeAuth($this->client);
    } 
    public function accountToolShopAuth()
    {
        return new AccountToolShopAuth($this->client);
    } 

}