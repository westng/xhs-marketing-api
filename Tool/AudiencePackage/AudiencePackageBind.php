<?php
/**
 * 批量计划绑定定向包
 * User: yueguang
 * Date: 2022/6/21
 * Time: 17:46
 */

namespace Tool\AudiencePackage;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AudiencePackageBind extends RpcRequest
{
    protected $url = '/2/audience_package/ad/bind/';
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

    }
}
