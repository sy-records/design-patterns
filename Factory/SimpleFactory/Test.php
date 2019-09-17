<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

include __DIR__ . '/../../vendor/autoload.php';

// 调用
use Luffy\DesignPatterns\Factory\SimpleFactory\SimpleFactory;
use Luffy\DesignPatterns\Factory\SimpleFactory\StaticFactory;

$pay1 = StaticFactory::pay("WeChatPay");
$pay1->pay();

$factory = new SimpleFactory();
$pay2 = $factory->pay("AliPay");
$pay2->pay();