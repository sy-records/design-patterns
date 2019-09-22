<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\AbstractFactory;


class WoMan implements HuMan
{
	public function say()
	{
		echo "我是一个女人 👩 \n";
	}
}