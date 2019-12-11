<?php

/**
 * Client.php
 *
 * @author     Luffy <lufei@swoole.com>
 * @date       2019/12/9
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

namespace Luffy\DesignPatterns\Flyweight;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $flyweight = new FlyweightFactory();
        $obj1 = $flyweight->getFlyweight("⭐️");
        $obj1->get('第1个');

        $obj2 = $flyweight->getFlyweight("⭐️");
        $obj2->get('第50个');

        var_dump($obj1 === $obj2);

        $obj3 = $flyweight->getFlyweight("🍎");
        $obj3->get('第1个');

        // 不共享的
        $obj4 = new UnsharedConcreteFlyweight("🍍");
        $obj4->get("一");
        $obj4->del();
        $obj4->get("一");
    }
}
Client::run();
