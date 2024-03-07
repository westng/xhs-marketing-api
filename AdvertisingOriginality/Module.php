<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/14
 * Time: 17:05
 */

namespace AdvertisingOriginality;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function creativeCreate()
    {
        return new CreativeCreate($this->client);
    }

    public function procCreativeCreate()
    {
        return new ProcCreativeCreate($this->client);
    }

    public function creativeGet()
    {
        return new CreativeGet($this->client);
    }

    public function creativeMaterialRead()
    {
        return new CreativeMaterialRead($this->client);
    }

    public function creativeRead()
    {
        return new CreativeRead($this->client);
    }

    public function creativeUpdate()
    {
        return new CreativeUpdate($this->client);
    }

    public function proccreativeUpdate()
    {
        return new ProcCreativeUpdate($this->client);
    }

    public function creativeUpdateStatus()
    {
        return new CreativeUpdateStatus($this->client);
    }
}
