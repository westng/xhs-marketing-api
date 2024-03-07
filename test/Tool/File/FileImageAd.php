<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/31
 * Time: 10:55
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$file = __DIR__ . '/T.png';

$req = $client::Tool()->file->imageAd();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setImageFile($file);
$req->setImageSignature(md5_file($file));

print_r($client->excute($req));
