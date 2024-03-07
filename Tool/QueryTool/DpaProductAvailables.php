<?php
/**
 * 查询DPA商品库可用类型
 * User: yueguang
 * Date: 2022/4/31
 * Time: 15:31
 */

namespace Tool\QueryTool;

use core\Profile\RpcRequest;

class DpaProductAvailables extends RpcRequest
{
    protected $url = '/2/dpa/product/availables/';
    protected $method = 'GET';
    protected $content_type = 'application/json';
}
