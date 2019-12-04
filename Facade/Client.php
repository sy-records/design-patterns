<?php

/**
 * Client
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/11/29
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Facade;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $facade = new Facade();
        $facade->send();
    }
}
Client::run();
