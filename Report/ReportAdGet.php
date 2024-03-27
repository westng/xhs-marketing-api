<?php
/**
 * 获取广告计划数据
 * 此接口用于获取广告计划数据，如果需要获取随心推数据，请通过随心推相关接口获取。
 * User: westng
 * Date: 2024/4/28
 * Time: 18:28
 */

namespace Report;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Dmp\DmpCustomAudienceDelete;

class ReportAdGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/report/ad/get/';
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
