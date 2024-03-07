<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/21
 * Time: 15:09
 */

namespace core\Exception;

class InvalidParamException extends TouTiaoException
{
    public function __construct($errorMessage, $errorCode = 500)
    {
        parent::__construct($errorMessage, $errorCode);
    }
}
