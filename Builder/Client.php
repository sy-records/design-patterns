<?php
/**
 * 建造者客户端测试文件
 *
 * @author     Luffy (lufei@swoole.com)
 * @date       2019/9/23
 * @copyright  Swoole, Inc.
 * @package    sy-records/design-patterns
 */

use Luffy\DesignPatterns\Builder\CarBuilder;
use Luffy\DesignPatterns\Builder\Director;
use Luffy\DesignPatterns\Builder\Car;

include __DIR__ . '/../vendor/autoload.php';

class Client
{
    public static function index()
    {
        $carBuilder = new CarBuilder();
		$director = new Director($carBuilder);
		$newCar = $director->build();
		$newCar->getCar();
    }

    public static function test()
    {
        $car = new Car();
        $car->setPartA()
			->setPartB()
			->setPartC()
			->setOthers()
			->getCar();
    }
}

// 使用建造者
Client::index();

// 流式操作
Client::test();