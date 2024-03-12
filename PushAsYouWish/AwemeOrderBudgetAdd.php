<?php
/**
 * 追加随心推订单预算
 * 可以使用该接口进行投放中订单的续费和续期操作
 * 
 * User: westng
 * Date: 2024/03/09
 * Time: 18:00
 */

namespace PushAsYouWish;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AwemeOrderBudgetAdd extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/aweme/order/budget/add/';
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
