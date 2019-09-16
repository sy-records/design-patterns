<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\FactoryMethod;

use Luffy\DesignPatterns\Factory\SimpleFactory\WeChatPay;

class FactoryWeChat implements PayFactoryMethod
{
	function create()
	{
		// TODO: Implement create() method.
		return new WeChatPay();
	}
}