<?php
/**
 * 获取计划成本保障状态
 * 获取计划成本保障状态，具体参见「成本保障规则」
 * 
 * User: westng
 * Date: 2024-04-12
 * Time: 17:16:42
 */

 

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdCompensateStatusGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/ad/compensate_status/get/';
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
 