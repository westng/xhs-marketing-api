<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/1
 * Time: 18:25
 */

require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$req = $client::Tool()->picToVideo->taskCallback();
