<?php
/**
 * 创意详细信息
 * User: yueguang
 * Date: 2022/4/12
 * Time: 14:40
 */
namespace AdvertisingOriginality;

use core\Profile\RpcRequest;

class CreativeRead extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/creative/read_v2/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }
}
