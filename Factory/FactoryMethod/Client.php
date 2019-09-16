<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

include __DIR__ . '/../../vendor/autoload.php';

use Luffy\DesignPatterns\Factory\SimpleFactory\FactoryAli;
use Luffy\DesignPatterns\Factory\SimpleFactory\FactoryWeChat;

/**
 * 具体生产对象并执行对象方法测试
 */
class Client
{
	public function index()
	{
		$factory = new FactoryAli();
		$ali = $factory->create();
		$ali->pay();


		$factory = new FactoryWeChat();
		$wechat = $factory->create();
		$wechat->pay();
	}
}

// 执行
$demo = new Client;
$demo->index();
