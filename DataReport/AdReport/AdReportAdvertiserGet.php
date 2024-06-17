<?php
/**
 * 获取广告账户数据
 * 此接口用于获取广告主账户数据。
 * 
 * User: westng
 * Date: 2024/6/15
 * Time: 10:45
 *
 */

namespace DataReport\AdReport;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdReportAdvertiserGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/report/advertiser/get/';
    protected $method = 'GET';
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
