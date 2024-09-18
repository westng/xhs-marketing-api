<?php
/*
 * 获取首发素材
 * 支持查询素材是否是首发素材，传入素材ID列表，返回首发素材列表。
 * @Date: 2024-09-18 13:29:32
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 13:49:22
 * @FilePath: /oc-marketing-api/Tools/File/FileVideoAwemeGet copy 11.php
 */

namespace Tools\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileVideoOriginalGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/file/video/original/get/';
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
