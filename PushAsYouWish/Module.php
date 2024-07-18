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

    public function awemeOrderDetailGet()
    {
        return new AwemeOrderDetailGet($this->client);
    }

    public function awemeOrderGet()
    {
        return new AwemeOrderGet($this->client);
    }

    public function awemeOrderTerminate()
    {
        return new AwemeOrderTerminate($this->client);
    }

    public function awemeOrderBudgetAdd()
    {
        return new AwemeOrderBudgetAdd($this->client);
    }

    public function awemeReportOrderGet()
    {
        return new AwemeReportOrderGet($this->client);
    }

    public function awemeOrderQuotaGet()
    {
        return new AwemeOrderQuotaGet($this->client);
    }
    
    public function awemeVideoGet()
    {
        return new AwemeVideoGet($this->client);
    }
}
