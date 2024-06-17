<?php
/**
 * 获取今日直播数据
 * 支持获取直播整体数据
 * 基于全部流量的情况(包括自然+广告),分析抖音号及直播间在竞价推广中的整体数据表现。直客账户支持查看官方抖音号下同主体全部广告账户的数据表现。
 * 
 * User: westng
 * Date: 2024/6/15
 * Time: 10:45
 *
 */

namespace DataReport\LiveReport;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DataReportLiveGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/report/live/get/';
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
