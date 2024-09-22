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
