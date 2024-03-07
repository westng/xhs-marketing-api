<?php

namespace Tools\CommentMgmt\HideUser;

use core\Profile\BaseModule;

class Module extends BaseModule
{
    public function toolsAwemeBannedCreate()
    {
        return new ToolsAwemeBannedCreate($this->client);
    } 

    public function toolsAwemeBannedDelete()
    {
        return new ToolsAwemeBannedDelete($this->client);
    } 
 
    public function toolsAwemeBannedList()
    {
        return new ToolsAwemeBannedList($this->client);
    } 

    public function toolsCommentTermsBannedAdd()
    {
        return new ToolsCommentTermsBannedAdd($this->client);
    } 

    public function toolsCommentTermsBannedDelete()
    {
        return new ToolsCommentTermsBannedDelete($this->client);
    } 

    public function toolsCommentTermsBannedGet()
    {
        return new ToolsCommentTermsBannedGet($this->client);
    } 

    public function toolsCommentTermsBannedUpdate()
    {
        return new ToolsCommentTermsBannedUpdate($this->client);
    } 

}