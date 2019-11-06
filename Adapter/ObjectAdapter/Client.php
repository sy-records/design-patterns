<?php
/**
 * 客户类
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/1
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Adapter\ObjectAdapter;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $adaptee = new DatabaseAdaptee();
        $adaptee->set();

        // 适配器
        $adapter = new DatabaseAdapter($adaptee);
        $adapter->set();

        $adapter->get();
    }
}

Client::run();