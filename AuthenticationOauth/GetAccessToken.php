<?php

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
