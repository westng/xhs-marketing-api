<?php
/**
 * 获取评论视频ID列表
 * 提供由mid查询对应的item_id的能力
 * 该接口仅适用于评论管理，仅返回有评论内容的对应抖音视频。若相关素材id的关联item_id均无评论，则返回为空
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\CommentMgmt;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsCommentMid2ItemId extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v3.0/tools/comment/mid2item_id/';
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
