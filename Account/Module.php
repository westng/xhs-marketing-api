<?php

namespace Account;

use core\Exception\TouTiaoException;
use core\Profile\BaseModule;

/**
 * Class Module
 * @package Tool
 *
 * @property \Account\Relationship\Module::class, $relationship
 * @property \Account\Information\Module::class $information 
 */
class Module extends BaseModule
{
    private $providers = [
        'relationship' => \Account\Relationship\Module::class,
        'information' => \Account\Information\Module::class
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
