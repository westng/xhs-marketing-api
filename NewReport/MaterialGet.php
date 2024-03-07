<?php
/**
 * 素材数据报表
 * User: yueguang
 * Date: 2022/09/26
 * Time: 15:00
 */

namespace NewReport;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class MaterialGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/v3.0/report/material/get/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        $this->url .= '?';
        foreach ($args as $key => $value) {
            if (!is_array($value)) {
                $this->url .= $key . '=' . $value . '&';
            } else {
                $this->url .= $key . '=' . json_encode($value) . '&';
            }
        }
        $this->url = rtrim($this->url, '&');
        return $this;
    }

    /**
     *
     * @throws InvalidParamException
     */
    public function check()
    {

    }


}
