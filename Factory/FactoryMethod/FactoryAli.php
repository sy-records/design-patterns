<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\FactoryMethod;

use Luffy\DesignPatterns\Factory\FactoryMethod\AliPay;

class FactoryAli implements CreatePayFactoryMethod
{
	function pay()
	{
		// TODO: Implement create() method.
		return new AliPay();
	}
}