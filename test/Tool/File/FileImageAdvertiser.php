<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/31
 * Time: 10:34
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$file = __DIR__ . '/dzaxfr-1547714860.png';

$req = $client::Tool()->file->imageAdvertiser();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
