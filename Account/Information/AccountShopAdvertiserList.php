<?php
/**
 * 获取店铺账户关联的广告账户列表
 * User: westng
 * Date: 2024/3/12
 * Time: 17:46
 */

namespace Account\Information;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class AccountShopAdvertiserList extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/shop/advertiser/list/';
    protected $method = 'GET';
    protected $content_type = 'application/json';
 
    /**
     * 店铺id
     * @var int $shop_id
     */
    protected $shop_id;

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
        RequestCheckUtil::checkNotNull($this->shop_id, 'shop_id');
    }
}
