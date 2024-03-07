<?php
/**
 * 创建转化ID
 * User: yueguang
 * Date: 2022/4/31
 * Time: 17:46
 */

namespace Tool\AdConvert;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class ToolsAdConvertCreate extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/create/';
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
