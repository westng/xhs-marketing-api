<?php
/**
 * 广告计划数据（新版）
 * User: yueguang
 * Date: 2022/4/28
 * Time: 18:28
 */

namespace Report;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Dmp\DmpCustomAudienceDelete;

class ReportAdGet extends RpcRequest
{
    protected $url = '/2/report/ad/get/';
    protected $content_type = 'application/json';
    protected $method = 'GET';

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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
