<?php 
/*
 * @Author: west_ng 457395070@qq.com
 * @Date: 2024-07-15 21:46:58
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-07-16 14:38:28
 * @FilePath: /oc-marketing-api/DataReport/AdReport/AdReportAdvertiserAdGet.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
/**
 * 视频互动流失数据
 * 此接口用于获取：视频互动流失数据，统计用户点击详情按钮或者左滑进入落地页的点击类行为发生在视频播放的第几秒。
 * 
 * User: westng
 * Date: 2024/6/15
 * Time: 10:45
 *
 */

namespace DataReport\AdReport;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdReportVideoUserLoseGet extends RpcRequest
{
    protected $url = 'https://api.oceanengine.com/open_api/v1.0/qianchuan/report/video_user_lose/get/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
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
