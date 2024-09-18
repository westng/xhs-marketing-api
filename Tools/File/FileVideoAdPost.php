<?php
/*
 * 上传视频素材
 * 通过此接口，用户可以上传和广告相关的素材视频。 视频格式：mp4、mpeg、3gp、avi
 * @Date: 2024-09-18 13:29:32
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 13:37:12
 * @FilePath: /oc-marketing-api/Tools/File/FileVideoAdPost.php
 */

namespace Tools\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileVideoAdPost extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/file/video/ad/';
    protected $method = 'POST';
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
