# 重要提醒
- 项目复制别人的， 谢谢GraceTeamWork
- 项目原地址：https://github.com/GraceTeamWork/ads-marketing-api

# ads-marketing-api
- 巨量引擎 随心推 MARKETING API SDK

## Installation

```
composer require grace-team-work/ads-marketing-api
```

## Requirements

- PHP 5.4 +

## 重要更新
更新随心推API



## Directory Structure
```
Advertiser/           账号服务模块
AdvertisingDelivery/           广告组模块
AdvertisingOriginality/        广告创意模块
AdvertisingPlan/               广告计划模块
AuthenticationOauth/           头条OAuth2.0授权
core/                          sdk核心
Dmp/                           DMP人群管理模块
Report/                        报表模块
NewReport/                     广告体验版数据报表(广告投放体验版)
Project/                       项目管理模块(广告投放体验版)  
Promotion/                     广告管理模块(广告投放体验版)
Tool/                          工具模块
  Tool/AppManagement           工具模块/应用管理
  Tool/AdConvert               工具模块/转化目标管理
  Tool/CreativeWord            工具模块/动态创意词包管理
  Tool/File                    工具模块/素材管理
```

## Example

```php
// 获取token, refresh_token
$auth = new ToutiaoSdk\ToutiaoAuth(APPID, SECRET);
print_r($auth->getAccessToken(AUTH_CODE));

// 刷新token
print_r($auth->refreshToken(REFRESH_TOKEN));
```

```php
// 调用示例
$client = new ToutiaoSdk\TouTiaoClient(TOKEN);
$args = [];
$req = $client::AdvertisingDelivery()->campaignGet()->setArgs($args)->send();
var_dump($req->getBody());
```

## Method introduction

广告体验版数据报表     |执行方式
  ------------- | -------------
 项目数据报表      |$client::NewReport()->projectGet()|
 广告数据报表      |$client::NewReport()->promotionGet()|
 素材数据报表      |$client::NewReport()->materialGet()|
 自定义报表      |$client::NewReport()->customGet()|
 

项目管理模块(广告投放体验版)      |执行方式
  ------------- | -------------
 创建项目      |$client::Project()->projectCreate()|
 更新项目      |$client::Project()->projectUpdate()|
 获取项目列表      |$client::Project()->projectList()|
 批量更新项目状态      |$client::Project()->projectStatusUpdate()|
 批量删除项目      |$client::Project()->projectDelete()|
 
广告管理模块(广告投放体验版)      |执行方式
  ------------- | -------------
 创建广告      |$client::Promotion()->promotionCreate()|
 修改广告      |$client::Promotion()->promotionUpdate()|
 获取广告列表      |$client::Promotion()->promotionList()|
 批量更新广告预算      |$client::Promotion()->promotionBudgetUpdate()|
 批量更新广告出价      |$client::Promotion()->promotionBidUpdate()|
 批量更新广告启用状态      |$client::Promotion()->promotionStatusUpdate()|
 批量删除广告      |$client::Promotion()->promotionDelete()|
 批量获取广告审核建议      |$client::Promotion()->promotionRejectReasonGet()|
 批量更新广告素材启用状态      |$client::Promotion()->materialStatusUpdate()|

账号服务模块       |执行方式
  ------------- | -------------
 创建项目      |$client::Advertiser()->majordomoAdvertise()|
 更新项目      |$client::Advertiser()->majordomoAdvertise()|
 获取项目列表      |$client::Advertiser()->majordomoAdvertise()|
 批量更新项目状态      |$client::Advertiser()->majordomoAdvertise()|
 批量删除项目      |$client::Advertiser()->majordomoAdvertise()|


账号服务模块       |执行方式
  ------------- | -------------
 获取纵横组织账户(广告主)       |$client::Advertiser()->majordomoAdvertise()|
 获取纵横组织账户(广告主)(分页)      |$client::Advertiser()->customerAdvertise()|  
 查询账号余额      |$client::Advertiser()->fundGet()|  
 获取账户日预算      |$client::Advertiser()->budgetGet()|  
 更新账户日预算      |$client::Advertiser()->updateBudget()|  
 查询账户日流水      |$client::Advertiser()->fundDailyStat()|  
 查询账户流水明细      |$client::Advertiser()->fundTransactionGet()|  



账号服务模块       |执行方式
  ------------- | -------------
 获取纵横组织账户(广告主)       |$client::Advertiser()->majordomoAdvertise()|
 获取纵横组织账户(广告主)(分页)      |$client::Advertiser()->customerAdvertise()|  
 查询账号余额      |$client::Advertiser()->fundGet()|  
 获取账户日预算      |$client::Advertiser()->budgetGet()|  
 更新账户日预算      |$client::Advertiser()->updateBudget()|  
 查询账户日流水      |$client::Advertiser()->fundDailyStat()|  
 查询账户流水明细      |$client::Advertiser()->fundTransactionGet()|  

广告组模块       |执行方式
  ------------- | -------------
 获取广告组       |$client::AdvertisingDelivery()->campaignGet()| 
 创建广告组       |$client::AdvertisingDelivery()->campaignCreate()| 
 修改广告组       | $client::AdvertisingDelivery()->campaignUpdate()| 
 广告组更新状态   | $client::AdvertisingDelivery()->campaignUpdateStatus()| 

广告创意|执行方式 
 ------------- | -------------
 获取创意列表| $client::AdvertisingOriginality()->CreativeGet()| 
 创建广告创意|$client::AdvertisingOriginality()->CreativeCreate() | 
 创意素材信息| $client::AdvertisingOriginality()->CreativeMaterialRead() | 
 创意详细信息| $client::AdvertisingOriginality()->CreativeRead() | 
 修改创意信息| $client::AdvertisingOriginality()->CreativeUpdate() | 
 更新创意状态| $client::AdvertisingOriginality()->CreativeUpdateStatus()| 
 
 广告计划|执行方式 
  ------------- | -------------
  创建广告计划| $client::AdvertisingPlan()->AdCreate()| 
  获取广告计划|$client::AdvertisingPlan()->AdGet() | 
  修改广告计划| $client::AdvertisingPlan()->AdUpdate()| 
  更新计划出价|  $client::AdvertisingPlan()->AdUpdateBid() | 
  更新计划预算| $client::AdvertisingPlan()->AdUpdateBudget() | 
  更新计划状态| $client::AdvertisingPlan()->AdUpdateStatus()| 

 数据报表|执行方式 
 ------------- | -------------
 广告主数据（新版）|$client::Report()->advertiserGet()| 
 广告组数据（新版）|$client::Report()->campaignGet() | 
 广告计划数据（新版）|$client::Report()->adGet() | 
 广告创意数据（新版）|$client::Report()->creativeGet() | 
 受众分析（省级数据）|$client::Report()->audienceProvince() | 
 受众分析（性别数据）|$client::Report()->audienceGender()| 
 受众分析（性别数据）|$client::Report()->audienceGender()| 
 受众分析（兴趣数据）|$client::Report()->audienceTag()| 
 受众分析（年龄数据）|$client::Report()->audienceAge()|
 受众分析（市级数据）| $client::Report()->audienceCity()|
 代理商数据|  $client::Report()->agentGet()|
 
 DMP 人群管理 | 执行方式
 ------------- | -------------
 数据源文件上传 | $client::Dmp()->dataSourceFileUpload()
 数据源创建 | $client::Dmp()->dataSourceCreate()|
 数据源更新| $client::Dmp()->dataSourceUpdate()|
 数据源详细信息| $client::Dmp()->dataSourceRead()|
 人群包列表| $client::Dmp()->customAudienceSelect()
 人群包详细信息| $client::Dmp()->customAudienceRead()
 删除人群包| $client::Dmp()->customAudienceDelete()
 拓展人群包| $client::Dmp()->customAudienceLookalike()
 规则人群包| $client::Dmp()->customAudienceRule()
 
  工具(应用管理) | 执行方式
  ------------ | -------------
  查询应用信息 | $client::Tool()->appManagement->getApp() 
  查询游戏信息 | $client::Tool()->appManagement->getBooking() 
  查询应用分包列表 | $client::Tool()->appManagement->getExtendPackage() 
   
 工具 （文件管理）| 执行方式
 ------------- | -------------
 广告主图片|  $client::Tool()->file->imageAdvertiser()
 广告图片 |  $client::Tool()->file->imageAd()
 上传视频 | $client::Tool()->file->videoAd()
 查询图片信息| $client::Tool()->file->imageAdGet()
 查询视频信息| $client::Tool()->file->videoAdGet()
 获取视频智能封面| $client::Tool()->file->videoCoverSuggest()
 获取图片素材库| client::Tool()->file->imageGet()
 获取视频素材库| $client::Tool()->file->videoGet()
 
 工具（动态创意词包）| 执行方式
 ------------- | -------------
 创建动态创意词包 | $client::Tool()->creativeWord->create()
 删除动态创意词包 | $client::Tool()->creativeWord->delete()
 更新动态创意词包 | $client::Tool()->creativeWord->update()
 查询动态创意词包 | $client::Tool()->creativeWord->select()
 
  工具（查询工具）| 执行方式
 ------------- | -------------
 查询受众预估结果 | $client::Tool()->queryTool->estimateAudience()
 查询应用信息 | $client::Tool()->queryTool->appSearch()
 查询建议出价 | $client::Tool()->queryTool->bidSuggest()
 查询DPA商品库可用类型| $client::Tool()->queryTool->dpaProductAvailables()
 查询DPA可用类型 | $client::Tool()->queryTool->dpaBehaviourAvailables()
 查询广告质量度 |  $client::Tool()->queryTool->adQualityGet()
 获取行业列表 | $client::Tool()->queryTool->industryGet()
 
 工具（兴趣词包）| 执行方式
 ------------- | -------------
 查询兴趣词包 | $client::Tool()->interestTag->select()
 创建兴趣词包 | $client::Tool()->interestTag->create()
 更新兴趣词包 | $client::Tool()->interestTag->update()
 删除兴趣词包 | $client::Tool()->interestTag->delete()
 兴趣关键词ID转词 | $client::Tool()->interestTag->id2word()
 兴趣关键词词转ID | $client::Tool()->interestTag->word2Id()
 
 工具 （转化目标管理）| 执行方式
 ------------- | -------------
 创建转化ID | $client::Tool()->adConvert->create()
 修改转化ID | $client::Tool()->adConvert->update()
 更新转化状态 | $client::Tool()->adConvert->updateStatus()
 查询计划可用转化ID |  $client::Tool()->adConvert->select()
 转化ID列表 |  $client::Tool()->adConvert->advConvertSelect()
 查询转化详细信息 | $client::Tool()->adConvert->read()
 转化ID推送 | $client::Tool()->adConvert->push()
 
 工具 （图片转视频）| 执行方式
 ------------ | -------------
 创建图片转视频任务 | $client::Tool()->picToVideo->taskCreate()
 获取音乐列表 | $client::Tool()->picToVideo->musicGet()
 获取任务状态 | $client::Tool()->picToVideo->statusGet()
 视频任务回调接口| $client::Tool()->picToVideo->taskCallback()
 
 工具 | 执行方式
 ------------ | -------------
 获取建站列表 | $client::Tool()->siteGet()
  
 
## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)
# oc-marketing-api
