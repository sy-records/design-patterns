<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * Class WoManFactory
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
class WoManFactory implements Factory
{
	public function createHuMan()
	{
		return new WoMan();
	}

	public function createMonkey()
	{
		return new FemaleMonkey();
	}
}