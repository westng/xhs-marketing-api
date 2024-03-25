<?php
/**
 * 行为关键词查询
 * 行为兴趣定向行为关键词查询
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\BehavioralInterests;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsInterestActionKeyword extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/tools/interest_action/action/keyword/';
    protected $method = 'GET';
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
