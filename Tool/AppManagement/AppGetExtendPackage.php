<?php
/**
 * 查询游戏信息
 * User: yueguang
 * Date: 2022/4/31
 * Time: 17:46
 */

namespace Tool\AppManagement;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AppGetExtendPackage extends RpcRequest
{
    protected $url = '/2/tools/app_management/extend_package/list/';
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
