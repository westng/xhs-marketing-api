<?php

namespace core\Profile;

use ToutiaoSdk\XiaoHongShuClient;

class BaseModule
{
    protected $client;

    public function __construct(XiaoHongShuClient $client)
    {
        $this->client = $client;
    }

}
