<?php
/**
 * User: lufei
 * Date: 2019/9/15
 * Email: lufei@swoole.com
 */

namespace Luffy\DesignPatterns\Factory\SimpleFactory;

/**
 * Class WeChatPay
 * @package Luffy\DesignPatterns\Factory\SimpleFactory
 */
class WeChatPay implements PaySimpleFactory
{
    public function pay()
    {
        echo "我是WeChatPay\n";
    }
}
