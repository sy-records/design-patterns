<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\FactoryMethod;

/**
 * Class WeChatPay
 * @package Luffy\DesignPatterns\Factory\FactoryMethod
 */
class WeChatPay implements createPay
{
    public function pay()
    {
        echo "我是WeChatPay\n";
    }
}
