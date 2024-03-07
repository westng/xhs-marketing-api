<?php
/**
 * 查询受众预估结果
 * User: yueguang
 * Date: 2022/4/31
 * Time: 14:55
 */

namespace Tool\QueryTool;

use core\Profile\RpcRequest;

class ToolsEstimateAudience extends RpcRequest
{
    protected $url = '/2/tools/estimate_audience/';
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


