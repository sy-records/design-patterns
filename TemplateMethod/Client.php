<?php

/**
 * Client.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/24
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\TemplateMethod;

require __DIR__ . "/../vendor/autoload.php";

class Client
{
    public static function run()
    {
        $obj1 = new ConcreteClass1();
        $obj1->templateMethod();

        echo "===========\n";

        $obj2 = new ConcreteClass2();
        $obj2->templateMethod();
    }
}
Client::run();
