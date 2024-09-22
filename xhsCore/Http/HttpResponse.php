<?php
/*
 * @Date: 2024-09-22 12:36:33
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-22 21:22:35
 * @FilePath: /MineAdmin/vendor/westng/xhs-marketing-api/xhsCore/Http/HttpResponse.php
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

namespace xhsCore\Http;

class HttpResponse
{
    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $status;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return 200 <= $this->status && 300 > $this->status;
    }
}
