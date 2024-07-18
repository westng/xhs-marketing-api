<?php

namespace DataReport;

use core\Exception\TouTiaoException;
use core\Profile\BaseModule;

/**
 * Class Module
 * @package DataReport
 *
 * @property \DataReport\LiveReport\Module $liveReport 
 */
class Module extends BaseModule
{
    private $providers = [
        'adReport' => \DataReport\AdReport\Module::class,
        'liveReport' => \DataReport\LiveReport\Module::class, 
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
