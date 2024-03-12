<?php

namespace Tools;

use core\Exception\TouTiaoException;
use core\Profile\BaseModule;

/**
 * Class Module
 * @package Tool
 *
 * @property \Tools\AudienceMgmt\Module $audienceMgmt
 * @property \Tools\BehavioralInterests\Module $behavioralInterests
 * @property  \Tools\InfluencerTargeting\Module $influencerTargeting
 * @property  \Tools\QueryTool\Module $queryTool
 * @property  \Tools\CommentMgmt\Module $commentMgmt 
 */
class Module extends BaseModule
{
    private $providers = [
        'audienceMgmt' => \Tools\AudienceMgmt\Module::class,
        'behavioralInterests' => \Tools\BehavioralInterests\Module::class,
        'influencerTargeting' => \Tools\InfluencerTargeting\Module::class,
        'queryTool' => \Tools\QueryTool\Module::class,
        'commentMgmt' => \Tools\CommentMgmt\Module::class
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
}
