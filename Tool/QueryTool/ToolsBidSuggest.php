<?php
/**
 * 查询建议出价
 * User: yueguang
 * Date: 2022/4/31
 * Time: 15:16
 */

namespace Tool\QueryTool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsBidSuggest extends RpcRequest
{
    protected $url = '/2/tools/bid/suggest/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
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
