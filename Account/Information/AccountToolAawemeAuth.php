<?php
/**
 * 广告主添加抖音号
 * User: westng
 * Date: 2024/3/12
 * Time: 17:46
 */

namespace Account\Information;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class AccountToolAawemeAuth extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/tools/aweme_auth/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
