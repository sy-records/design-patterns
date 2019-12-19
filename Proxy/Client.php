<?php

/**
 * Client.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/16
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Proxy;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $proxy = new Proxy();
        $proxy->get();
        $proxy->put();
        $proxy->send();
    }
}
Client::run();