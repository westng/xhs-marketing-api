<?php
/*
 * @Description: 获取access_token
 * @Date: 2024-09-19 21:54:22
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-19 21:56:42
 * @FilePath: /xhs-marketing-api/AuthenticationOauth/AdvertiserGet.php
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
