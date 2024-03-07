<?php
/**
 * Module
 * User: yueguang
 * Date: 2022/09/26
 * Time: 15:00
 */

namespace Project;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function projectCreate()
    {
        return new ProjectCreate($this->client);
    }

    public function projectDelete()
    {
        return new ProjectDelete($this->client);
    }

    public function projectList()
    {
        return new ProjectList($this->client);
    }

    public function projectStatusUpdate()
    {
        return new ProjectStatusUpdate($this->client);
    }

    public function projectUpdate()
    {
        return new ProjectUpdate($this->client);
    }
}
