<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/1
 * Time: 18:03
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->interestTag->id2word();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));

