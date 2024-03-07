<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/31
 * Time: 16:15
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->queryTool->adQualityGet();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
