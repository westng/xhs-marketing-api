<?php
/**
 * 查询DPA可用类型
 * User: yueguang
 * Date: 2022/4/31
 * Time: 15:35
 */

namespace Tool\QueryTool;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DpaBehaviourAvailables extends RpcRequest
{
    protected $url = '/2/dpa/behaviour/availables/';
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
