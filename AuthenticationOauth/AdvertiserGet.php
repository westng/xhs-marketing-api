<?php
/**
 * 获取access_token
 * User: westng
 * Date: 2024/4/21
 * Time: 10:31
 */

namespace AuthenticationOauth;

use core\Profile\RpcRequest;

class AdvertiserGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';

    protected $url = '/oauth2/advertiser/get/';

    protected $cotent_type = 'application/json';

    protected $app_id;
    protected $secret;
    protected $access_token;
}
