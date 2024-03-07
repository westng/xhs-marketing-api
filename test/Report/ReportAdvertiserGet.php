<?php
/**
 * 广告主数据
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/29
 * Time: 16:08
 */
require __DIR__.'/../../index.php';
require __DIR__.'/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Report()->advertiserGet();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
