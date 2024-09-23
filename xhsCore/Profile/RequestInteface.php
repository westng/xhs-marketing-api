<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/21
 * Time: 11:55
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
