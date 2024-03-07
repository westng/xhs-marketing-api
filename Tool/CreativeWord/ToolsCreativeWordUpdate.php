<?php
/**
 * 更新动态创意词包
 * User: yueguang
 * Date: 2022/4/31
 * Time: 12:22
 */

namespace Tool\CreativeWord;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsCreativeWordUpdate extends RpcRequest
{
     protected $url = '/2/tools/creative_word/update/';
     protected $method = 'POST';
     protected $content_type = 'application/json';

    /**
     * 广告主ID
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
