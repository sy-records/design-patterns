<?php
/**
 * Client.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2020/5/6
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Strategy;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $data = [13, 5, 49, 34, 25, 89];
        $context = new Context(new BubbleSortStrategy);
        var_dump($context->sort($data));
        $context->setStrategy(new QuickSortStrategy);
        var_dump($context->sort($data));

        echo "**********\r\n";
        $context = new Context(new QuickSortStrategy);
        var_dump($context->sort($data));
    }
}

Client::run();