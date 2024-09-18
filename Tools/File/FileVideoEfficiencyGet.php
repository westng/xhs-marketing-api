<?php
/*
 * 获取低效素材
 * 支持查询素材是否是低效素材，传入素材ID列表，返回低效素材列表。
 * @Date: 2024-09-18 13:29:32
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-18 13:50:27
 * @FilePath: /oc-marketing-api/Tools/File/FileVideoAwemeGet copy 12.php
 */

namespace Tools\File;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FileVideoEfficiencyGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/file/video/efficiency/get/';
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
