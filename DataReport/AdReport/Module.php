<?php
/*
 * @Author: west_ng 457395070@qq.com
 * @Date: 2024-06-15 10:54:17
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-07-15 21:49:57
 * @FilePath: /oc-marketing-api/DataReport/AdReport/Module.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace DataReport\AdReport;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function adReportAdvertiserGet()
    {
        return new AdReportAdvertiserGet($this->client);
    }

    public function adReportAdGet()
    {
        return new AdReportAdGet($this->client);
    }

}