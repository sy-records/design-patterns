<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\OptimizeAbstractFactory;

/**
 * 具体产品类
 * Class ManMonkey
 * @package Luffy\DesignPatterns\Factory\OptimizeAbstractFactory
 */
class ManMonkey implements Monkey
{
    public function say()
    {
        echo __CLASS__ . " 我是一只公猴 🐒 \n";
    }
}
