<?php
/**
 * Module
 * User: westng
 * Date: 2024/3/7
 * Time: 17:23
 */

namespace Promotion;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function materialStatusUpdate()
    {
        return new MaterialStatusUpdate($this->client);
    }

    public function promotionBidUpdate()
    {
        return new PromotionBidUpdate($this->client);
    }

    public function promotionBudgetUpdate()
    {
        return new PromotionBudgetUpdate($this->client);
    }

    public function promotionCreate()
    {
        return new PromotionCreate($this->client);
    }

    public function promotionDelete()
    {
        return new PromotionDelete($this->client);
    }

    public function promotionList()
    {
        return new PromotionList($this->client);
    }

    public function promotionRejectReasonGet()
    {
        return new PromotionRejectReasonGet($this->client);
    }

    public function promotionStatusUpdate()
    {
        return new PromotionStatusUpdate($this->client);
    }

    public function promotionUpdate()
    {
        return new PromotionUpdate($this->client);
    }
}
