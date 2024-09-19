<?php
/*
 * @Description: 获取access_token
 * @Date: 2024-09-19 21:54:22
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-19 21:57:37
 * @FilePath: /xhs-marketing-api/AuthenticationOauth/GetAccessToken.php
 */

namespace AuthenticationOauth;

use core\Profile\RpcRequest;

class GetAccessToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    protected $url = '/api/open/oauth2/access_token';

    protected $cotent_type = 'application/json';

    protected $app_id;
    protected $secret;
    protected $grant_type;
    protected $auth_code;
}
