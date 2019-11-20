<?php
/**
 * Client.php
 *
 * @author    Luffy (lufei@swoole.com)
 * @date      2019/11/15
 * @copyright Swoole, Inc.
 * @package   sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Decorator;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $tea = new Tea();
        echo $tea->name();
        echo $tea->price()."元\n";

        $blackTea = new BlackTea($tea);
        echo $blackTea->name();
        echo $blackTea->price()."元\n";

        $milkTea = new MilkTea($tea);
        echo $milkTea->name();
        echo $milkTea->price()."元\n";
    }
}

Client::run();
