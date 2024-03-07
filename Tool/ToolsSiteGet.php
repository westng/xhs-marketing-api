<?php
/**
 * 获取建站列表
 * User: yueguang
 * Date: 2022/4/1
 * Time: 11:37
 */

namespace Tool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsSiteGet extends RpcRequest
{
    protected $url = '/2/tools/site/get/';
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
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
