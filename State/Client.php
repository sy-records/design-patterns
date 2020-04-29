<?php
/**
 * Client.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/4/26
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\State;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $context = new Context(new ConcreteStateOnline);
        $context->request();
        echo "**********" . PHP_EOL;
        $context->request1();
        $context->request();
    }
}
Client::run();