<?php

namespace DataReport\LiveReport;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function dataReportLiveGet()
    {
        return new DataReportLiveGet($this->client);
    }

    public function dataReportTodayLiveRoomDetailGet()
    {
        return new DataReportTodayLiveRoomDetailGet($this->client);
    }

    public function dataReportTodayLiveRoomFlowPerformanceGet()
    {
        return new DataReportTodayLiveRoomFlowPerformanceGet($this->client);
    }

    public function dataReportTodayLiveRoomGet()
    {
        return new DataReportTodayLiveRoomGet($this->client);
    }

    public function dataReportTodayLiveRoomProductListGet()
    {
        return new DataReportTodayLiveRoomProductListGet($this->client);
    }

    public function dataReportTodayLiveRoomUserGet()
    {
        return new DataReportTodayLiveRoomUserGet($this->client);
    }


}