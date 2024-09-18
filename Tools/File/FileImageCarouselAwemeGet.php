<?php
/*
 * 获取抖音号下的图文
 * 通过商品id获取抖音号下已有的图文素材，当前仅短视频带货支持，必须传商品id
 * @Date: 2024-09-18 13:29:32
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 13:49:02
 * @FilePath: /oc-marketing-api/Tools/File/FileImageCarouselAwemeGet.php
 */

namespace Tools\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileImageCarouselAwemeGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/carousel/aweme/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     * @var string $advertiser_id
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
