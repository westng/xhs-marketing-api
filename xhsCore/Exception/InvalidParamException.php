<?php
/*
 * @Date: 2024-09-22 12:36:33
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-22 21:20:38
 * @FilePath: /MineAdmin/vendor/westng/xhs-marketing-api/xhsCore/Exception/InvalidParamException.php
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

namespace xhsCore\Exception;

class InvalidParamException extends XHSException
{
    public function __construct($errorMessage, $errorCode = 500)
    {
        parent::__construct($errorMessage, $errorCode);
    }
}
