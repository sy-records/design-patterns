<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * HuMan 产品父类
 * Interface HuMan
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
interface HuMan
{
    /**
     * @return mixed
     */
    public function say();
}
