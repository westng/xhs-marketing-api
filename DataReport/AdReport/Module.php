<?php

namespace DataReport\AdReport;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function adReportAdvertiserGet()
    {
        return new AdReportAdvertiserGet($this->client);
    }

}