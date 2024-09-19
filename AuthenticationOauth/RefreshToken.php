<?php
/**
 * 刷新access_token
 * @Date: 2024-09-19 21:54:22
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-19 21:55:11
 * @FilePath: /xhs-marketing-api/AuthenticationOauth/RefreshToken.php
 */

namespace AuthenticationOauth;

use core\Profile\RpcRequest;

class RefreshToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/api/open/oauth2/refresh_token';

    protected $app_id;
    protected $secret;
    protected $grant_type;
    protected $refresh_token;
}
