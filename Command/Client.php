<?php

/**
 * Client.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/1/7
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Command;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        // 创建接收者
        $receiver = new Receiver();
        $command = new Command($receiver);

        // 命令接收者调用命令
        $invoker = new Invoker();
        $invoker->setCommand($command);
        $invoker->executeCommand();
    }
}
Client::run();
