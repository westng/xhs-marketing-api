<?php

namespace Tools\CommentMgmt;

use core\Exception\TouTiaoException;
use core\Profile\BaseModule;

class Module extends BaseModule
{
    private $providers = [
        'hideUser' => \Tools\CommentMgmt\HideUser\Module::class, 
    ];

    /**
     * @param $name
     * @return mixed
     * @throws TouTiaoException
     */
    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            if (array_key_exists($name, $this->providers)) {
                return new $this->providers[$name]($this->client);
            }
            throw new TouTiaoException("Undefind property $name", 500);
        }
        return $this->$name;
    }

    public function toolsCommentGet()
    {
        return new ToolsCommentGet($this->client);
    } 

    public function toolsCommentHide()
    {
        return new ToolsCommentHide($this->client);
    } 

    public function toolsCommentMetricsGet()
    {
        return new ToolsCommentMetricsGet($this->client);
    } 

    public function toolsCommentMid2ItemId()
    {
        return new ToolsCommentMid2ItemId($this->client);
    } 

    public function toolsCommentReply()
    {
        return new ToolsCommentReply($this->client);
    } 

    public function toolsCommentReplyGet()
    {
        return new ToolsCommentReplyGet($this->client);
    } 

    public function toolsCommentStickOnTop()
    {
        return new ToolsCommentStickOnTop($this->client);
    }  
 
}