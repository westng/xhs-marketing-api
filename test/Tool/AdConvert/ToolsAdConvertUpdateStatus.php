<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/1
 * Time: 16:04
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$req = $client::Tool()->adConvert->updateStatus();
$args = [];
$req->setArgs($args);

print_r($client->excute($req));
