<?php
/*
 * @Date: 2024-09-22 12:36:33
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-22 21:22:47
 * @FilePath: /MineAdmin/vendor/westng/xhs-marketing-api/xhsCore/Profile/BaseModule.php
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

namespace xhsCore\Profile;

use XHSSdk\XHSClient;

class BaseModule
{
    protected $client;

    public function __construct(XHSClient $client)
    {
        $this->client = $client;
    }
}
