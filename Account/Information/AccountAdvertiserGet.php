<?php
/**
 * 获取已授权的账户（店铺/代理商）
 * 此接口用于获取已经授权的账号列表，账号包含了店铺、代理商等角色；
 * 一次授权多个账号，共用一个Access Token; 一个Access Token可用于操作授权的多个账号；
 * Access token 与账户之间对应关系不要弄混，以免后续调用广告主相关接口报No permission错误；
 * User: westng
 * Date: 2024/3/12
 * Time: 17:46
 */

namespace Account\Information;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;
use Report\ReportAdGet;

class AccountAdvertiserGet extends RpcRequest
{
    protected $url = 'https://ad.oceanengine.com/open_api/oauth2/advertiser/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';
 

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
