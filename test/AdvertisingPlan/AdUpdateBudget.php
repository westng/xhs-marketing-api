<?php
/**
 * 更新计划预算
 * User: westng
 * Date: 2024/4/12
 * Time: 17:37
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingPlan()->AdUpdateBudget()->setArgs($args)->send();//注意是二维
var_dump($req->getBody());
