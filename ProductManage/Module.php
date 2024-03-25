<?php
/**
 * Module
 * User: westng
 * Date: 2024/3/7
 * Time: 17:23
 */

namespace ProductManage;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function productAvailableGet()
    {
        return new ProductAvailableGet($this->client);
    } 

    public function awemeProductAvailableGet()
    {
        return new AwemeProductAvailableGet($this->client);
    } 

    public function brandAuthorizedGet()
    {
        return new BrandAuthorizedGet($this->client);
    } 

    public function shopAuthorizedGet()
    {
        return new ShopAuthorizedGet($this->client);
    } 
}
 