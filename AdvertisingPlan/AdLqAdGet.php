<?php
/**
 * 获取低效计划列表
 * 用于获取千川广告账户下的低效计划列表
 * 
 * User: westng
 * Date: 2024-04-12
 * Time: 17:16:42
 */

 

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdLqAdGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/lq_ad/get/';
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

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {
    }
}
 