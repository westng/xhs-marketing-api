<?php
/**
 * Module
 * User: yueguang
 * Date: 2022/09/26
 * Time: 15:00
 */

namespace NewReport;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function customGet()
    {
        return new CustomGet($this->client);
    }

    public function materialGet()
    {
        return new MaterialGet($this->client);
    }

    public function projectGet()
    {
        return new ProjectGet($this->client);
    }

    public function promotionGet()
    {
        return new PromotionGet($this->client);
    }
}
