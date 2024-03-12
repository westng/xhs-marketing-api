<?php
/**
 * 获取店铺账户信息
 * User: westng
 * Date: 2024/3/12
 * Time: 17:46
 */

namespace Account\Relationship;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class AccountShopGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/shop/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';
 

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

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        
    }
}
