<?php
/**
 * 视频任务回调接口
 * User: yueguang
 * Date: 2022/4/1
 * Time: 11:03
 */

namespace Tool\PicToVideo;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class ToolsVideoTaskCallback extends RpcRequest
{
    protected $url = '';
    protected $method = 'POST';
    protected $content_type = 'application/json';

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
    }
}
