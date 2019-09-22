<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;

/**
 * Class FemaleMonkey
 * @package Luffy\DesignPatterns\Factory\AbstractFactory
 */
class FemaleMonkey implements Monkey
{
	public function say()
	{
		echo "我是一只母猴 🐵 \n";
	}
}