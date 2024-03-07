<?php
/**
 * 获取行业列表
 * 获取行业列表，通过接口可以获取到一级行业、二级行业、三级行业列表，其中代理商创建广告主时使用的是二级行业，而在创建创意填写创意分类时使用的是三级行业，请注意区分。
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\QueryTool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsIndustryGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/tools/industry/get/';
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
