<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\OptimizeAbstractFactory;

/**
 * 具体产品类
 * Class Man
 * @package Luffy\DesignPatterns\Factory\OptimizeAbstractFactory
 */
class Man implements HuMan
{
    public function say()
    {
        echo __CLASS__ . " 我是一个男人 👨 \n";
    }
}
