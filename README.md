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
Authentication/           小红书OAuth2.0授权
core/                          SDK核心
```

## Example

```php
// 获取token, refresh_token
$auth = new XHSSdk\XHSAuth(APPID, SECRET);
print_r($auth->getAccessToken(AUTH_CODE));

// 刷新token
print_r($auth->refreshToken(REFRESH_TOKEN));
```

```php
// 调用示例
$client = new XHSSdk\XHSClient(TOKEN);
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

| 投放管理         | 执行方式 |
| ---------------- | -------- |
| 推广计划         | 执行方式 |
| --------         | -------- |
| 创建计划         | 未开发   |
| 编辑计划         | 未开发   |
| 修改计划状态     | 未开发   |
| 查询计划         | 未开发   |
| ------------     | -------- |
| 推广单元         | 执行方式 |
| --------         | -------- |
| 创建单元         | 未开发   |
| 编辑单元         | 未开发   |
| 修改单元状态     | 未开发   |
| 获取单元列表接口 | 未开发   |
| ------------     | -------- |
| 推广创意         | 执行方式 |
| --------         | -------- |
| 创建笔记创意     | 未开发   |
| 创建落地页创意   | 未开发   |
| 创建程序化创意   | 未开发   |
| 编辑创意         | 未开发   |
| 修改创意状态     | 未开发   |
| 创意查询         | 未开发   |

| 数据报表 | 执行方式 |
| -------- | -------- |

| 素材管理 | 执行方式 |
| -------- | -------- |

| 工具 | 执行方式 |
| ---- | -------- |

## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)

# xhs-marketing-api
