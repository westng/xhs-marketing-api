<?php
/*
 * 获取千川素材库图片
 * 该接口用于获取千川素材库图片
 * @Date: 2024-09-18 13:29:32
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 13:44:52
 * @FilePath: /oc-marketing-api/Tools/File/FileImageGet.php
 */

namespace Tools\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileImageGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/image/get/';
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
