<?php
/**
 * User: lufei
 * Date: 2019/9/16
 * Email: lufei@swoole.com
 */

use Luffy\DesignPatterns\Factory\OptimizeAbstractFactory\Factory;
use Luffy\DesignPatterns\Factory\OptimizeAbstractFactory\FactoryWithReflection;

include __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public function index()
    {
        echo "----- 使用简单工厂优化 ----- \n";
        $factory = new Factory();
        $human = $factory->createHuMan();
        $human->say();

        $monkey = $factory->createMonkey();
        $monkey->say();

        echo "----- 使用反射优化 ----- \n";
        $factory = new FactoryWithReflection();
        $human = $factory->createHuMan();
        $human->say();

        $monkey = $factory->createMonkey();
        $monkey->say();
    }
}

// 执行
$demo = new Client;
$demo->index();
