<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\OptimizeAbstractFactory;

/**
 * Class WoManMonkey
 * @package Luffy\DesignPatterns\Factory\OptimizeAbstractFactory
 */
class WoManMonkey implements Monkey
{
    public function say()
    {
        echo __CLASS__ . " 我是一只母猴 🐵 \n";
    }
}
