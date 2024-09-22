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

namespace xhsCore\Profile;

interface RequestInteface
{
    public function getUrl();

    public function setUrl($url);

    public function getMethod();

    public function getTimeout();

    public function setParams($array);

    public function getParams();

    public function addParam($key, $value);

    public function getContentType();

    public function check();
}
