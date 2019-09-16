<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\SimpleFactory;

use Luffy\DesignPatterns\Factory\SimpleFactory\AliPay;

class FactoryAli implements PayFactoryMethod
{
	function create()
	{
		// TODO: Implement create() method.
		return new AliPay();
	}
}