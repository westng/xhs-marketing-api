<?php
/**
 * 终止随心推订单
 * 该接口用于终止小店随心推订单么，终止成功后将会返回当前广告主终止订单配额信息，订单终止条件以及配额相关信息具体见：
 * 「小店随心推」订单配额介绍文档(对外)
 * 
 * User: westng
 * Date: 2024/09/26
 * Time: 15:00
 */

namespace PushAsYouWish;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AwemeOrderTerminate extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/aweme/order/terminate/';
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
