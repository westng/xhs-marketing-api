<?php
/*
 * @Date: 2024-09-22 22:01:45
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-23 12:26:27
 * @FilePath: /MineAdmin/vendor/westng/xhs-marketing-api/Authentication/RefreshToken.php
 */
/*
 * @Date: 2024-09-22 12:36:33
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-23 12:23:51
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

namespace Authentication;

use xhsCore\Profile\RpcRequest;

class RefreshToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    protected $url = '/api/open/oauth2/access_token';

    protected $app_id;

    protected $secret;

    protected $grant_type;

    protected $refresh_token;
}
