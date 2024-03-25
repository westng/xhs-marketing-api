<?php

namespace Tools\BehavioralInterests;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function toolsInterestActionActionCategory()
    {
        return new ToolsInterestActionActionCategory($this->client);
    } 

    public function toolsInterestActionId2word()
    {
        return new ToolsInterestActionId2word($this->client);
    } 

    public function toolsInterestActionInterestCategory()
    {
        return new ToolsInterestActionInterestCategory($this->client);
    } 

    public function toolsInterestActionInterestKeyword()
    {
        return new ToolsInterestActionInterestKeyword($this->client);
    } 

    public function toolsInterestActionKeyword()
    {
        return new ToolsInterestActionKeyword($this->client);
    } 

    public function toolsInterestKeywordSuggest()
    {
        return new ToolsInterestKeywordSuggest($this->client);
    } 
}