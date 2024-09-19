# ads-marketing-api

- 小红书商业开放平台 聚光 MARKETING API SDK

## Installation

```
composer require westng/xhs-marketing-api
```

## Requirements

- PHP 5.4 +

## Directory Structure

```
AuthenticationOauth/           小红书OAuth2.0授权
core/                          SDK核心
```

## Example

```php
// 获取token, refresh_token
$auth = new ToutiaoSdk\XiaoHongShuAuth(APPID, SECRET);
print_r($auth->getAccessToken(AUTH_CODE));

// 刷新token
print_r($auth->refreshToken(REFRESH_TOKEN));
```

```php
// 调用示例
$client = new ToutiaoSdk\XiaoHongShuClient(TOKEN);
$args = [];
$req = $client::AdvertisingDelivery()->campaignGet()->setArgs($args)->send();
var_dump($req->getBody());
```

## Method introduction

| 账户服务               | 执行方式 |
| ---------------------- | -------- |
| 获取计划流水接口       | 未开发   |
| 获取账户日预算余额接口 | 未开发   |
| 获取账户流水接口       | 未开发   |
| 账户白名单             | 未开发   |

## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)

# oc-marketing-api
