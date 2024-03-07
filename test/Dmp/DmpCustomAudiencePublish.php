<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/30
 * Time: 12:28
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Dmp()->customAudiencePublish();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
