<?php
/*
 * @Author: west_ng 457395070@qq.com
 * @Date: 2024-06-15 10:54:17
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-07-16 17:12:20
 * @FilePath: /oc-marketing-api/DataReport/AdReport/Module.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace DataReport\AdReport;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function adReportAdGet()
    {
        return new AdReportAdGet($this->client);
    }

    public function adReportAdMaterialGet()
    {
        return new AdReportAdMaterialGet($this->client);
    }

    public function adReportAdvertiserGet()
    {
        return new AdReportAdvertiserGet($this->client);
    }

    public function adReportCreativeGet()
    {
        return new AdReportCreativeGet($this->client);
    }

    public function adReportCustomConfigGet()
    {
        return new AdReportCustomConfigGet($this->client);
    }

    public function adReportCustomGet()
    {
        return new AdReportCustomGet($this->client);
    }

    public function adReportLongTransferOrderGet()
    {
        return new AdReportLongTransferOrderGet($this->client);
    }

    public function adReportMaterialGet()
    {
        return new AdReportMaterialGet($this->client);
    }

    public function adReportSearchWordGet()
    {
        return new AdReportSearchWordGet($this->client);
    }

    public function adReportUniPromotionDimensionDataAuthorGet()
    {
        return new AdReportUniPromotionDimensionDataAuthorGet($this->client);
    }

    public function adReportUniPromotionDimensionDataRoomGet()
    {
        return new AdReportUniPromotionDimensionDataRoomGet($this->client);
    }

    public function adReportUniPromotionGet()
    {
        return new AdReportUniPromotionGet($this->client);
    }

    public function adReportVideoUserLoseGet()
    {
        return new AdReportVideoUserLoseGet($this->client);
    }
}