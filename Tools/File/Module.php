<?php
/*
 * @Date: 2024-04-25 15:35:03
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 14:02:14
 * @FilePath: /oc-marketing-api/Tools/File/Module.php
 */

namespace Tools\File;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function fileCarouselAwemeGet()
    {
        return new FileCarouselAwemeGet($this->client);
    }
    public function fileImageAdPost()
    {
        return new FileImageAdPost($this->client);
    }
    public function fileImageCarouselAwemeGet()
    {
        return new FileImageCarouselAwemeGet($this->client);
    }
    public function fileImageDeletePost()
    {
        return new FileImageDeletePost($this->client);
    }
    public function fileImageGet()
    {
        return new FileImageGet($this->client);
    }
    public function fileVideoAdPost()
    {
        return new FileVideoAdPost($this->client);
    }
    public function fileVideoAwemeGet()
    {
        return new FileVideoAwemeGet($this->client);
    }
    public function fileVideoCarouselGet()
    {
        return new FileVideoCarouselGet($this->client);
    }

    public function fileVideoDeletePost()
    {
        return new FileVideoDeletePost($this->client);
    }
    public function fileVideoEfficiencyGet()
    {
        return new FileVideoEfficiencyGet($this->client);
    }
    public function fileVideoGet()
    {
        return new FileVideoGet($this->client);
    }
    public function fileVideoOriginalGet()
    {
        return new FileVideoOriginalGet($this->client);
    }
}
