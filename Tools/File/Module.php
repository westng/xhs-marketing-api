<?php

namespace Tools\File;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function fileCarouselAwemeGet()
    {
        return new FileCarouselAwemeGet($this->client);
    }

    public function fileVideoAwemeGet()
    {
        return new FileVideoAwemeGet($this->client);
    }
}
