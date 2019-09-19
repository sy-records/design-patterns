<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\FactoryMethod;

use Luffy\DesignPatterns\Factory\SimpleFactory\WeChatPay;

class FactoryWeChat implements CreatePayFactoryMethod
{
	function pay()
	{
		// TODO: Implement create() method.
		return new WeChatPay();
	}
}