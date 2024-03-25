<?php
/**
 * 获取广告组
 * 获取广告组列表，可指定fields获取每个广告组的基本元素。
 * User: westng
 * Date: 2024/4/17
 * Time: 14:28
 */

namespace AdvertisingDelivery;

use core\Profile\RpcRequest;

class CampaignGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/campaign_list/get/';
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
