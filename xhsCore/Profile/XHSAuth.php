<?php

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace XHSSdk;

use Authentication\GetAccessToken;
use Authentication\RefreshToken;
use xhsCore\Exception\XHSException;
use xhsCore\Http\HttpRequest;

class XHSAuth
{
    public $app_id;

    public $secret;

    public $server_url = 'https://adapi.xiaohongshu.com';

    public $box_url = 'https://adapi.xiaohongshu.com';

    public $is_sanbox = false;

    /**
     * AuthClient constructor.
     * @param bool $is_sanbox
     * @param null $server_url
     * @param null $box_url
     * @param mixed $app_id
     * @param mixed $secret
     */
    public function __construct($app_id, $secret, $is_sanbox = false, $server_url = null, $box_url = null)
    {
        $this->app_id = $app_id;
        $this->secret = $secret;
        $this->is_sanbox = $is_sanbox;
        if ($server_url !== null) {
            $this->server_url = $server_url;
        }
        if ($box_url !== null) {
            $this->box_url = $box_url;
        }
    }

    /**
     * 获取access_token.
     * @param mixed $auth_code
     * @return string
     * @throws XHSException
     */
    public function getAccessToken($auth_code)
    {
        $request = new GetAccessToken();
        $request->setParams(['grant_type' => 'auth_code', 'app_id' => $this->app_id, 'secret' => $this->secret]);
        $request->addParam('auth_code', $auth_code);
        print_r($request);
        return $this->execute($request)->getBody();
    }

    /**
     * 刷新access_token.
     * @param mixed $refresh_token
     * @return string
     * @throws XHSException
     */
    public function refreshToken($refresh_token)
    {
        $request = new RefreshToken();
        $request->setParams(['grant_type' => 'refresh_token', 'app_id' => $this->app_id, 'secret' => $this->secret, 'refresh_token' => $refresh_token]);
        return $this->execute($request)->getBody();
    }

    /**
     * 获取Authcode Url.
     *
     * @param mixed $scope
     * @param mixed $state
     * @param mixed $cb_url
     * @return string
     */
    public function getAuthCodeUrl($cb_url, $scope, $state = 'your_custom_params')
    {
        $cb_url_encode = urlencode($cb_url);
        return "https://qianchuan.jinritemai.com/openapi/qc/audit/oauth.html?app_id={$this->app_id}&state={$state}&scope={$scope}&material_auth=1&redirect_uri={$cb_url_encode}";
    }

    /**
     * @param mixed $access_token
     * @return XHSClient
     */
    public function makeClient($access_token)
    {
        return XHSClient::getInstance($access_token, $this->is_sanbox, $this->server_url, $this->box_url);
    }

    /**
     * @param null $url
     * @param mixed $request
     * @throws XHSException
     */
    private function execute($request, $url = null)
    {
        $params = $request->getParams();
        $headers = [
            'Content-Type' => $request->getContentType(),
        ];
        if ($url == null) {
            $url = ($this->is_sanbox ? $this->box_url : $this->server_url) . $request->getUrl();
        }

        return HttpRequest::curl($url, $request->getMethod(), json_encode($params), $headers);
    }
}
