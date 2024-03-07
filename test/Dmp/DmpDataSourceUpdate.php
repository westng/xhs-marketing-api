<?php
/**
 * Created by PhpStorm.
 * User: westng
 * Date: 2024/4/30
 * Time: 11:19
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Dmp()->dataSourceUpdate();
$args = [];
$req->setArgs($args);
print_r($client->excute($req));
