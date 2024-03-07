<?php
/**
 * 推送人群包（新版）
 * User: yueguang
 * Date: 2022/4/30
 * Time: 15:32
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpCustomAudiencePushV2 extends RpcRequest
{
    protected $url = '/2/dmp/custom_audience/push_v2/';
    protected $method = 'POST';
    protected $content_type = 'application/json';

    /**
     * 人群包所属广告主ID
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}
