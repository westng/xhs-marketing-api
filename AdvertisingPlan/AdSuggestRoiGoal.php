<?php
/**
 * 获取支付ROI目标建议
 * 此接口用于获取系统建议的支付ROI目标的最大值
 * 
 * User: westng
 * Date: 2024-04-12
 * Time: 17:16:42
 */

 

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdSuggestRoiGoal extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/suggest/roi/goal/';
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
 