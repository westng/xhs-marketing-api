<?php
/**
 * 获取地域列表
 * User: yueguang
 * Date: 2022/4/31
 * Time: 16:25
 */

namespace Tool\QueryTool;

use core\Profile\RpcRequest;

class ToolsRegionGet extends RpcRequest
{
    protected $url = '/2/tools/region/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

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
}
