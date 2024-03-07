<?php
/**
 * Module
 * User: westng
 * Date: 2024/3/7
 * Time: 17:23
 */

namespace PushAsYouWish;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function awemeOrderCreate()
    {
        return new AwemeOrderCreate($this->client);
    }
}
