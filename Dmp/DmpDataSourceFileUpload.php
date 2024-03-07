<?php
/**
 * 数据源文件上传
 * User: yueguang
 * Date: 2022/4/29
 * Time: 16:58
 */

namespace Dmp;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class DmpDataSourceFileUpload extends RpcRequest
{
    protected $url = '/2/dmp/data_source/file/upload/';
    protected $method = 'POST';
    protected $content_type = 'multipart/form-data';

    /**
     * 广告主ID
     * @var integer $advertiser_id
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
