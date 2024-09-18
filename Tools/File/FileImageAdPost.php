<?php
/*
 * 上传图片素材
 * 通过此接口，用户可以上传和广告相关的素材图片，例如创意素材。 图片格式：jpg、jpeg、png、bmp、gif，文件大小<=1.5M。
 * @Date: 2024-09-18 13:29:32
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 13:37:20
 * @FilePath: /oc-marketing-api/Tools/File/FileImageAdPost.php
 */

namespace Tools\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileImageAdPost extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/file/image/ad/';
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
