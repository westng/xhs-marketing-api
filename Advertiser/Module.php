<?php
/**
 * 账号服务
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/14
 * Time: 16:56
 */

namespace Advertiser;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function majordomoAdvertise()
    {
        return new MajordomoAdvertise($this->client);
    }

    public function customerAdvertise()
    {
        return new CustomerAdvertise($this->client);
    }

    public function fundGet()
    {
        return new FundGet($this->client);
    }

    public function budgetGet()
    {
        return new BudgetGet($this->client);
    }

    public function updateBudget()
    {
        return new UpdateBudget($this->client);
    }

    public function fundDailyStat()
    {
        return new FundDailyStat($this->client);
    }

    public function fundTransactionGet()
    {
        return new FundTransactionGet($this->client);
    }
}
