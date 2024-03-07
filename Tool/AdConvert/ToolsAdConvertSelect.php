<?php
/**
 * 查询计划可用转化ID
 * User: yueguang
 * Date: 2022/4/31
 * Time: 18:09
 */

namespace Tool\AdConvert;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Couchbase\RegexpSearchQuery;

class ToolsAdConvertSelect extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/select/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
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
