<?php
/**
 * 代理商数据
 * User: yueguang
 * Date: 2022/4/29
 * Time: 11:39
 */

namespace Report;

use core\Profile\RpcRequest;

class ReportAgentGet extends RpcRequest
{
    protected $url = '/2/report/agent/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
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
}
