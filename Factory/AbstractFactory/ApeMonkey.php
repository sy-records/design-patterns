<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * 具体产品类
 * Class ApeMonkey
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
class ApeMonkey implements Monkey
{
    public function say()
    {
        echo "我是一只猿猴 🐒 \n";
    }
}
