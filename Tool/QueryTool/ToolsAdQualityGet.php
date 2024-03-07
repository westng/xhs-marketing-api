<?php
/**
 * 查询广告质量度
 * User: yueguang
 * Date: 2022/4/31
 * Time: 16:07
 */

namespace Tool\QueryTool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdQualityGet extends RpcRequest
{
    protected $url = '/2/tools/ad_quality/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主id
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
        RequestCheckUtil::checkNotNull($this->advertiser_id,'advertiser_id');
    }
}
