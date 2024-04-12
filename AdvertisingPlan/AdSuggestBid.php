<?php
/**
 * 获取非ROI目标建议出价
 * 支持通过该接口获取非ROI目标建议出价
 * 
 * User: westng
 * Date: 2024-04-12
 * Time: 17:16:42
 */

 

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdSuggestBid extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/suggest_bid/';
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
 