<?php
/**
 * 批量删除屏蔽词 
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\CommentMgmt\HideUser;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsCommentTermsBannedDelete extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v3.0/tools/comment/terms_banned/delete/';
    protected $method = 'POST';
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
