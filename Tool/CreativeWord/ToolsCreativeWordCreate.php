<?php
/**
 * 创建动态创意词包
 * User: yueguang
 * Date: 2022/4/31
 * Time: 12:00
 */

namespace Tool\CreativeWord;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Tool\AdConvert\ToolsAdConvertCreate;

class ToolsCreativeWordCreate extends RpcRequest
{
    protected $url = '/2/tools/creative_word/create/';
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
