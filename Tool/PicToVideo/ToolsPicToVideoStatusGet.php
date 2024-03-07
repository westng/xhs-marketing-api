<?php
/**
 * 获取任务状态
 * User: yueguang
 * Date: 2022/4/1
 * Time: 10:52
 */

namespace Tool\PicToVideo;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsPicToVideoStatusGet extends RpcRequest
{
    protected $url = '/2/tools/pic_to_video/status/get/';
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
