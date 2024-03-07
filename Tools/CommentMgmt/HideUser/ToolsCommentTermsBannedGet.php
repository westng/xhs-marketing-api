<?php
/**
 * 获取屏蔽词 
 * 获取屏蔽词接口
 * 注：当advid下所有的广告都为绑定抖音号投放时，需上传aweme_id，根据aweme_id获取屏蔽词
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\CommentMgmt\HideUser;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsCommentTermsBannedGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v3.0/tools/comment/terms_banned/get/';
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
