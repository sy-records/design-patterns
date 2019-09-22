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

		$factory = new ManFactory();
		$monkey = $factory->createMonkey();
		$monkey->say();

		echo "*****************\n";

		$factory = new WoManFactory();
		$woman = $factory->createHuMan();
		$woman->say();

		$factory = new WoManFactory();
		$woman_monkey = $factory->createMonkey();
		$woman_monkey->say();

	}
}

// 执行
$demo = new Client;
$demo->index();
