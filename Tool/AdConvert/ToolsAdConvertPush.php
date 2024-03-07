<?php
/**
 * 转化ID推送
 * User: yueguang
 * Date: 2022/4/1
 * Time: 10:16
 */

namespace Tool\AdConvert;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsAdConvertPush extends RpcRequest
{
    protected $url = '/2/tools/ad_convert/push/';
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
