<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

use Luffy\DesignPatterns\Factory\AbstractFactory\ManFactory;
use Luffy\DesignPatterns\Factory\AbstractFactory\WoManFactory;

include __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public function index()
    {
        $factory = new ManFactory();
        $man = $factory->createHuMan();
        $man->say();

		$monkey = $factory->createMonkey();
		$monkey->say();

		echo "*****************\n";

		$factory = new WoManFactory();
		$woman = $factory->createHuMan();
		$woman->say();

		$woman_monkey = $factory->createMonkey();
		$woman_monkey->say();

	}
}

// 执行
$demo = new Client;
$demo->index();
