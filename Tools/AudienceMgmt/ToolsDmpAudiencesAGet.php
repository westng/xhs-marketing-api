<?php
/**
 * 查询创编可用人群
 * 本接口，仅用来获取在PC端创建/更新广告计划，定向设置下选择“更多人群”时，所展示的人群包列表信息。
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\AudienceMgmt;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsDmpAudiencesAGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/v1.0/qianchuan/dmp/audiences/get/';
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
