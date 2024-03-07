<?php
/**
 * 查询抖音类目列表
 * 该接口用于解决 创建计划时，设置抖音达人定向需要的相关id值
 * 接口将返回抖音类目id值
 * 
 * User: westng
 * Date: 2024/4/31
 * Time: 17:46
 */

namespace Tools\InfluencerTargeting;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest; 

class ToolsAwemeMultiLevelCategoryGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/2/tools/aweme_multi_level_category/get/';
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
