<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * 具体工厂类
 * Class ManFactory
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
class ManFactory implements Factory
{
    /**
     * @return Man|mixed
     */
    public function createHuMan()
    {
        return new Man();
    }

	public function createMonkey()
	{
		return new ApeMonkey();
    }
}
