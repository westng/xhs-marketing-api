<?php
/**
 * 获取定向受众预估
 * 定向受众预估，用于当选择定向后预估大概的受众数量以及曝光量
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\QueryTool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsEstimateAudience extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/tools/estimate_audience/';
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

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    { 

    }
}
