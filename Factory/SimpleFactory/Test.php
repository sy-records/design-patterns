<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

include __DIR__ . '/../../vendor/autoload.php';

// 调用
use Luffy\DesignPatterns\Factory\SimpleFactory\SimpleFactory;

$pay1 = SimpleFactory::pay("WeChatPay");
$pay1->pay();
$pay2 = SimpleFactory::pay("AliPay");
$pay2->pay();