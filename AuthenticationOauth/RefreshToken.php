<?php
/*
 * @Date: 2024-09-22 12:36:33
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-22 21:23:46
 * @FilePath: /MineAdmin/vendor/westng/xhs-marketing-api/AuthenticationOauth/RefreshToken.php
 */

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace AuthenticationOauth;

use xhsCore\Profile\RpcRequest;

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
