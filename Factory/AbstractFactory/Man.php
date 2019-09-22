<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * 具体产品类
 * Class Man
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
class Man implements HuMan
{
    public function say()
    {
        echo "我是一个男人 👨 \n";
    }
}
