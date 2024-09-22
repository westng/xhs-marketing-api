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

use Report\Module;
use xhsCore\Exception\InvalidParamException;
use xhsCore\Exception\XHSException;
use xhsCore\Http\HttpRequest;
use xhsCore\Http\HttpResponse;
use xhsCore\Profile\RequestInteface;

class XHSClient
{
    public static $access_token;

    public static $server_url = 'https://adapi.XHS.com';

    public static $box_url = 'https://adapi.XHS.com';

    public static $is_sanbox = false;

    private static $instance;

    // 禁止被实例化
    private function __construct($access_token, $is_sanbox, $server_url, $box_url) {}

    // 禁止clone
    private function __clone() {}

    //  实例化自己并保存到$instance中，已实例化则直接调用
    public static function getInstance($access_token, $is_sanbox, $server_url, $box_url): object
    {
        static::$access_token = $access_token;
        if ($is_sanbox !== null) {
            static::$is_sanbox = $is_sanbox;
        }
        if ($server_url !== null) {
            static::$server_url = $server_url;
        }
        if ($box_url !== null) {
            static::$box_url = $box_url;
        }
        if (empty(self::$instance[$access_token])) {
            self::$instance[$access_token] = new self($access_token, $is_sanbox, $server_url, $box_url);
        }
        return self::$instance[$access_token];
    }

    /**
     * 执行 HTTP 请求并返回响应.
     * @param RequestInterface $request 包含请求信息的请求对象，必须实现 RequestInterface 接口
     * @param null|string $url 目标 URL，可选参数
     * @return HttpResponse 包含 HTTP 响应的 HttpResponse 对象
     * @throws XHSException 当请求校验失败或出现错误时抛出异常
     */
    public function excute(RequestInteface $request, $url = null)
    {
        // 检查请求对象的有效性，确保请求信息的正确性
        $request->check();
        // 获取请求参数
        $params = $request->getParams();
        // 构建请求头，包括 Access-Token 和 Content-Type
        $headers = [
            'Access-Token' => static::$access_token,
            'Content-Type' => $request->getContentType(),
        ];
        // 如果没有提供 URL，从请求对象中获取 URL
        if ($url == null) {
            $url = $request->getUrl();
            // 检查 URL 是否为空
            if ($url == '') {
                throw new InvalidParamException('HTTP URL is required, and now the URL is empty');
            }

            // 如果 URL 不以 "http" 开头，根据环境配置拼接完整的 URL
            if (substr($url, 0, 4) != 'http') {
                $url = (static::$is_sanbox ? static::$box_url : static::$server_url) . $request->getUrl();
            }
        }

        // 如果请求方式为GET将参数转换拼接在URL中
        if ($request->getMethod() == 'GET') {
            $url .= '?' . http_build_query($params);
            $params = null; // 释放内存，避免内存溢出
        }

        // 如果 Content-Type 包含 "json"，则将请求参数转换为 JSON 格式
        if (strpos($request->getContentType(), 'json') > 0) {
            $params = json_encode($params);
        }

        // 设置请求超时时间
        HttpRequest::$readTimeout = $request->getTimeout();
        // 调用 HttpRequest::curl 方法，发送 HTTP 请求并获取响应
        return HttpRequest::curl($url, $request->getMethod(), $params, $headers);
    }

    public static function Report()
    {
        return new Module(self::$instance[static::$access_token]);
    }
}
