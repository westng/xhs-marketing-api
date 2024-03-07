<?php
/**
 * 获取评论统计指标
 * 获取广告账户下评论的「可见评论数」、「可见负评数」、「可见评论负评率」
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\CommentMgmt;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsCommentMetricsGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v3.0/tools/comment_metrics/get/';
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
