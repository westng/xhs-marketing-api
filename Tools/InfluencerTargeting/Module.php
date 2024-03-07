<?php

namespace Tools\InfluencerTargeting;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function toolsAwemeAuthorInfoGet()
    {
        return new ToolsAwemeAuthorInfoGet($this->client);
    } 

    public function toolsAwemeCategoryTopAuthorGet()
    {
        return new ToolsAwemeCategoryTopAuthorGet($this->client);
    } 

    public function toolsAwemeInfoSearch()
    {
        return new ToolsAwemeInfoSearch($this->client);
    } 

    public function toolsAwemeMultiLevelCategoryGet()
    {
        return new ToolsAwemeMultiLevelCategoryGet($this->client);
    } 

    public function toolsAwemeSimilarAuthorSearch()
    {
        return new ToolsAwemeSimilarAuthorSearch($this->client);
    } 
 
}