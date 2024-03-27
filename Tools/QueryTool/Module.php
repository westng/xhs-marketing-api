<?php

namespace Tools\QueryTool;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function toolsIndustryGet()
    {
        return new ToolsIndustryGet($this->client);
    } 
 
    public function toolsEstimateAudience()
    {
        return new ToolsEstimateAudience($this->client);
    } 
    
}