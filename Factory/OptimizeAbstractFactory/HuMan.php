<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\OptimizeAbstractFactory;

/**
 * HuMan 产品父类
 * Interface HuMan
 * @package Luffy\DesignPatterns\Factory\OptimizeAbstractFactory
 */
interface HuMan
{
    /**
     * @return mixed
     */
    public function say();
}
