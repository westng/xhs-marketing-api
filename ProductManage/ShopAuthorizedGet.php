<?php
/**
 * 获取广告主绑定的店铺列表
 * 在店铺新客场景下，支持广告主选择具体绑定的店铺进行新客投放
 * 投放到近365天未在该店铺下发生过成交订单的人群
 * 如您的巨量千川账户与店铺解除授权,店铺新客定向功能将失效,但计划不会停止投放,而是扩展到其他人群,请谨慎操作
 * 
 * User: westng
 * Date: 2024/03/17
 * Time: 15:00
 */

namespace ProductManage;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ShopAuthorizedGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/shop/authorized/get/';
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
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }


}
