<?php
/**
 * 获取千川广告账户全量信息
 * User: westng
 * Date: 2024/3/12
 * Time: 17:46
 */

namespace Account\Relationship;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class AccountAdvertiserInfo extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/advertiser/info/';
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
