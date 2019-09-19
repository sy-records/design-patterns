<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\FactoryMethod;

class FactoryAli implements CreatePayFactoryMethod
{
	function create()
	{
		// TODO: Implement create() method.
		return new AliPay();
	}
}