<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/30
 * Time: 15:49
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Dmp()->customAudiencePushV2();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
