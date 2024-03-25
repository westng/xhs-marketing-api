<?php
/**
 * 广告组状态更新
 * 此接口用于更新当前千川广告账户下的广告组的状态。
 * User: westng
 * Date: 2024/4/29
 * Time: 11:50
 */

namespace AdvertisingDelivery;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class CampaignUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/batch_campaign_status/update/';
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

