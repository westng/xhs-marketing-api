<?php

namespace core\Profile;

use XHSSdk\XHSClient;

class BaseModule
{
    protected $client;

    public function __construct(XHSClient $client)
    {
        $this->client = $client;
    }

}
