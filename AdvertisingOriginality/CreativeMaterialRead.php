<?php
/**
 * 创意素材信息
 * 披露广告创意素材信息(支持查询图片、标题、素材类型、对应计划ID等)。
 * User: yueguang
 * Date: 2022/4/12
 * Time: 15:45
 */
namespace AdvertisingOriginality;

use core\Profile\RpcRequest;

class CreativeMaterialRead extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/2/creative/material/read/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
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




}
