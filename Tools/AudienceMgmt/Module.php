<?php

namespace Tools\AudienceMgmt;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function toolsDmpAudiencesAGet()
    {
        return new ToolsDmpAudiencesAGet($this->client);
    } 

}