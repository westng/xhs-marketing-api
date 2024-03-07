<?php
/**
 * 刷新access_token
 * User: westng
 * Date: 2024/4/12
 * Time: 16:31
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
print_r($auth->refreshToken(REFRESH_TOKEN));
