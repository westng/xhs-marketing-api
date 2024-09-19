<?php

namespace core\Profile;

use XiaoHongShuSdk\XiaoHongShuClient;

class BaseModule
{
    protected $client;

    public function __construct(XiaoHongShuClient $client)
    {
        $this->client = $client;
    }

}
