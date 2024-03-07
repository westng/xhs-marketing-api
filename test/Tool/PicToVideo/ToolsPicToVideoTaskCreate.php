<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/12
 * Time: 10:42
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$req = $client::Tool()->picToVideo->taskCreate();
$args = [];
$req->setArgs($args);
print_r($client->excute($req));


