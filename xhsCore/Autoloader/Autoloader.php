<?php
/*
 * @Date: 2024-09-22 12:36:33
 * @LastEditors: west_ng 457395070@qq.com
 * @LastEditTime: 2024-09-22 21:20:12
 * @FilePath: /MineAdmin/vendor/westng/xhs-marketing-api/xhsCore/Autoloader/Autoloader.php
 */

declare(strict_types=1);
/**
 * This file is part of MineAdmin.
 *
 * @link     https://www.mineadmin.com
 * @document https://doc.mineadmin.com
 * @contact  root@imoi.cn
 * @license  https://github.com/mineadmin/MineAdmin/blob/master/LICENSE
 */

namespace xhsCore\Autoloader;

class Autoloader
{
    private static $autoloadPathArray = [
        'xhsCore/Autoloader', 'xhsCore/Http', 'xhsCore/Regions', 'xhsCore/Profile', 'xhsCore/Exception',
    ];

    private static $replacePath = [
        'XHSSdk\\' => '\xhsCore\Profile\\',
    ];

    public static function autoload($className)
    {
        $directories = dirname(dirname(__DIR__));
        foreach (self::$autoloadPathArray as $path) {
            $file = $directories . DIRECTORY_SEPARATOR . $path . '.php';
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
            if (is_file($file)) {
                var_dump(123, $file);
                include_once $file;
                break;
            }
        }
        foreach (self::$replacePath as $searchStr => $replaceStr) {
            $className = str_replace($searchStr, $replaceStr, $className);
        }
        $file = $directories . DIRECTORY_SEPARATOR . $className . '.php';
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
        if (is_file($file)) {
            var_dump(1234, $file);
            include_once $file;
        }
    }

    public static function loadDirectories()
    {
        $directories = dirname(dirname(__DIR__));
        foreach (glob($directories . DIRECTORY_SEPARATOR . '*') as $directory) {
            if (is_dir($directory) && basename($directory) !== 'xhsCore') {
                self::$autoloadPathArray[] = basename($directory);
            }
        }
    }

    public static function addAutoloadPath($path)
    {
        self::$autoloadPathArray[] = $path;
    }
}

spl_autoload_register(['xhsCore\Autoloader\Autoloader', 'autoload'], true, true);
