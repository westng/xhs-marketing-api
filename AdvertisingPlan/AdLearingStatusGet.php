<?php
/**
 * 获取计划学习期状态
 * 获取计划学习期状态，具体可参考「学习期状态」
 * 
 * User: westng
 * Date: 2024-04-12
 * Time: 17:16:42
 */

 

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdLearingStatusGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/ad/learing_status/get/';
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
 