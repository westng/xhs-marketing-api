<?php
/**
 * Module
 * User: westng
 * Date: 2024/3/7
 * Time: 17:23
 */

namespace Funds;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function financeBalanceGet()
    {
        return new FinanceBalanceGet($this->client);
    }
    public function financeWalletGet()
    {
        return new FinanceWalletGet($this->client);
    }
}
